<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'db.php';

$employee_id = (int)($_GET['employee_id'] ?? 1);

// Employee list
$employees = $pdo->query("SELECT id, name, position, department FROM employees WHERE status='probation' ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);

// Employee info
$emp = $pdo->prepare("SELECT e.*, m.name as manager_name FROM employees e LEFT JOIN employees m ON m.id = e.manager_id WHERE e.id = ?");
$emp->execute([$employee_id]);
$employee = $emp->fetch(PDO::FETCH_ASSOC);

// Days left in probation (assume 6 months from start_date)
$start = new DateTime($employee['start_date']);
$end = clone $start;
$end->modify('+6 months');
$today = new DateTime();
$days_left = max(0, $today->diff($end)->days * ($end > $today ? 1 : -1));

// Probation journey steps
$has_mid = (bool)$pdo->prepare("SELECT COUNT(*) FROM probation_reviews WHERE employee_id=? AND review_type LIKE '%Mid%' AND outcome IS NOT NULL")->execute([$employee_id]);
$mid_stmt = $pdo->prepare("SELECT COUNT(*) FROM probation_reviews WHERE employee_id=? AND review_type LIKE '%Mid%' AND outcome IS NOT NULL");
$mid_stmt->execute([$employee_id]);
$has_mid = (bool)$mid_stmt->fetchColumn();

$obj_count = (int)$pdo->prepare("SELECT COUNT(*) FROM objectives WHERE employee_id=?")->execute([$employee_id]);
$obj_stmt = $pdo->prepare("SELECT COUNT(*) FROM objectives WHERE employee_id=?");
$obj_stmt->execute([$employee_id]);
$obj_count = (int)$obj_stmt->fetchColumn();

// Stats
$pending_sig = $pdo->prepare("SELECT COUNT(*) FROM probation_reviews WHERE employee_id=? AND outcome IS NOT NULL AND signed=0");
$pending_sig->execute([$employee_id]);

$completed_rev = $pdo->prepare("SELECT COUNT(*) FROM probation_reviews WHERE employee_id=? AND outcome IS NOT NULL AND signed=1");
$completed_rev->execute([$employee_id]);

$self_assessed = $pdo->prepare("SELECT COUNT(*) FROM objectives WHERE employee_id=? AND self_score IS NOT NULL");
$self_assessed->execute([$employee_id]);

$stats = [
    'pending_signatures' => (int)$pending_sig->fetchColumn(),
    'reviews_completed'  => (int)$completed_rev->fetchColumn(),
    'my_objectives'      => $obj_count,
    'self_assessed'      => (int)$self_assessed->fetchColumn(),
];

// Objectives grouped by review_type
$obj_rows = $pdo->prepare("SELECT * FROM objectives WHERE employee_id=? ORDER BY review_type, id");
$obj_rows->execute([$employee_id]);
$objectives = $obj_rows->fetchAll(PDO::FETCH_ASSOC);

// Group by review_type
$grouped = [];
foreach ($objectives as $o) {
    $rt = $o['review_type'] ?? 'general';
    if (!isset($grouped[$rt])) $grouped[$rt] = [];
    $grouped[$rt][] = [
        'id'          => (int)$o['id'],
        'title'       => $o['title'],
        'description' => $o['description'],
        'category'    => $o['category'],
        'weight'      => (int)$o['weight'],
        'score'       => $o['score'] !== null ? (int)$o['score'] : null,
        'self_score'  => $o['self_score'] !== null ? (int)$o['self_score'] : null,
        'target_date' => $o['target_date'] ? date('d M Y', strtotime($o['target_date'])) : null,
        'completed'   => $o['score'] !== null,
    ];
}

// Reviews
$rev_rows = $pdo->prepare("SELECT pr.*, CASE WHEN pr.outcome IS NOT NULL AND pr.signed=1 THEN 'completed' WHEN pr.outcome IS NOT NULL AND pr.signed=0 THEN 'awaiting_signature' WHEN pr.review_date >= CURDATE() THEN 'scheduled' ELSE 'in_progress' END as status FROM probation_reviews pr WHERE pr.employee_id=? ORDER BY pr.review_date DESC");
$rev_rows->execute([$employee_id]);
$reviews = array_map(fn($r) => array_merge($r, ['review_date' => date('d M Y', strtotime($r['review_date']))]), $rev_rows->fetchAll(PDO::FETCH_ASSOC));

// Signatures needed
$signatures = array_filter($reviews, fn($r) => $r['status'] === 'awaiting_signature');

echo json_encode([
    'employee'   => array_merge($employee, ['days_left' => $days_left]),
    'employees'  => $employees,
    'stats'      => $stats,
    'objectives' => $grouped,
    'reviews'    => $reviews,
    'signatures' => array_values($signatures),
    'journey'    => [
        'started'    => true,
        'objectives' => $obj_count > 0,
        'mid_review' => $has_mid,
        'final'      => false,
        'outcome'    => false,
    ],
]);
