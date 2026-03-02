<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'db.php';

$id = (int)($_GET['id'] ?? 0);
if (!$id) { echo json_encode(['error' => 'Invalid ID']); exit; }

$stmt = $pdo->prepare("
    SELECT pr.*, e.name, e.email, e.department, e.position, e.start_date,
           m.name as manager_name,
           DATE_ADD(e.start_date, INTERVAL 6 MONTH) as probation_end
    FROM probation_reviews pr
    JOIN employees e ON e.id = pr.employee_id
    LEFT JOIN employees m ON m.id = e.manager_id
    WHERE pr.id = ?
");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) { echo json_encode(['error' => 'Not found']); exit; }

// Compute status
if ($row['outcome'] !== null && $row['signed']) {
    $status = 'completed';
} elseif ($row['outcome'] !== null && !$row['signed']) {
    $status = 'awaiting_signature';
} elseif ($row['review_date'] >= date('Y-m-d')) {
    $status = 'scheduled';
} else {
    $status = 'in_progress';
}

// Step index for timeline
$step_map = ['scheduled' => 0, 'in_progress' => 2, 'awaiting_signature' => 3, 'completed' => 5];
$current_step = $step_map[$status] ?? 0;

// Objectives for this employee
$obj_stmt = $pdo->prepare("SELECT * FROM objectives WHERE employee_id = (SELECT employee_id FROM probation_reviews WHERE id = ?)");
$obj_stmt->execute([$id]);
$objectives = array_map(fn($o) => [
    'id'          => (int)$o['id'],
    'title'       => $o['title'],
    'description' => $o['description'],
    'category'    => $o['category'],
    'weight'      => (int)$o['weight'],
    'score'       => $o['score'] !== null ? (int)$o['score'] : null,
    'self_score'  => $o['self_score'] !== null ? (int)$o['self_score'] : null,
    'target_date' => $o['target_date'] ? date('d M Y', strtotime($o['target_date'])) : null,
], $obj_stmt->fetchAll(PDO::FETCH_ASSOC));

echo json_encode([
    'review' => [
        'id'            => (int)$row['id'],
        'review_type'   => $row['review_type'],
        'review_date'   => date('d M Y', strtotime($row['review_date'])),
        'outcome'       => $row['outcome'],
        'signed'        => (bool)$row['signed'],
        'notes'         => $row['notes'],
        'status'        => $status,
        'current_step'  => $current_step,
    ],
    'employee' => [
        'name'          => $row['name'],
        'email'         => $row['email'],
        'department'    => $row['department'],
        'position'      => $row['position'],
        'manager_name'  => $row['manager_name'] ?? '—',
        'review_date'   => date('d M Y', strtotime($row['review_date'])),
        'probation_end' => date('d M Y', strtotime($row['probation_end'])),
    ],
    'objectives' => $objectives,
]);
