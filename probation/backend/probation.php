<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'db.php';

$search  = '%' . trim($_GET['search'] ?? '') . '%';
$status  = $_GET['status'] ?? '';
$type    = $_GET['type'] ?? '';
$page    = max(1, (int)($_GET['page'] ?? 1));
$limit   = 10;
$offset  = ($page - 1) * $limit;

// Build WHERE
$where = ["1=1"];
$params = [];

if (trim($_GET['search'] ?? '') !== '') {
    $where[] = "(e.name LIKE ? OR e.department LIKE ?)";
    $params[] = $search; $params[] = $search;
}

// status filter maps to computed status
if ($status === 'scheduled') {
    $where[] = "pr.outcome IS NULL AND pr.review_date >= CURDATE()";
} elseif ($status === 'in_progress') {
    $where[] = "pr.outcome IS NULL AND pr.review_date < CURDATE() AND pr.signed = 0";
} elseif ($status === 'awaiting_signature') {
    $where[] = "pr.outcome IS NOT NULL AND pr.signed = 0";
} elseif ($status === 'completed') {
    $where[] = "pr.outcome IS NOT NULL AND pr.signed = 1";
}

if ($type !== '') {
    $where[] = "pr.review_type = ?";
    $params[] = $type;
}

$whereStr = implode(' AND ', $where);

// Stats
$stats = [
    'total'    => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews")->fetchColumn(),
    'upcoming' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NULL AND review_date >= CURDATE()")->fetchColumn(),
    'awaiting' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NOT NULL AND signed = 0")->fetchColumn(),
    'completed'=> (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NOT NULL AND signed = 1")->fetchColumn(),
];

// Count
$countStmt = $pdo->prepare("SELECT COUNT(*) FROM probation_reviews pr JOIN employees e ON e.id = pr.employee_id WHERE $whereStr");
$countStmt->execute($params);
$total = (int)$countStmt->fetchColumn();

// Rows
$stmt = $pdo->prepare("
    SELECT pr.id, e.name, e.email, e.department,
           pr.review_type, pr.review_date, pr.outcome, pr.signed
    FROM probation_reviews pr
    JOIN employees e ON e.id = pr.employee_id
    WHERE $whereStr
    ORDER BY pr.review_date DESC
    LIMIT $limit OFFSET $offset
");
$stmt->execute($params);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$reviews = array_map(function($r) {
    // compute status label
    if ($r['outcome'] !== null && $r['signed']) {
        $statusLabel = 'completed';
    } elseif ($r['outcome'] !== null && !$r['signed']) {
        $statusLabel = 'awaiting_signature';
    } elseif ($r['review_date'] >= date('Y-m-d')) {
        $statusLabel = 'scheduled';
    } else {
        $statusLabel = 'in_progress';
    }
    return [
        'id'          => $r['id'],
        'name'        => $r['name'],
        'email'       => $r['email'],
        'department'  => $r['department'],
        'review_type' => $r['review_type'],
        'review_date' => date('d M Y', strtotime($r['review_date'])),
        'status'      => $statusLabel,
        'outcome'     => $r['outcome'],
    ];
}, $rows);

// Distinct types for filter
$types = $pdo->query("SELECT DISTINCT review_type FROM probation_reviews ORDER BY review_type")->fetchAll(PDO::FETCH_COLUMN);

echo json_encode([
    'stats'   => $stats,
    'reviews' => $reviews,
    'total'   => $total,
    'page'    => $page,
    'pages'   => max(1, ceil($total / $limit)),
    'types'   => $types,
]);
