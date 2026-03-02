<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'db.php';

$stats = [
    'active'    => (int)$pdo->query("SELECT COUNT(*) FROM feedback_360_cycles WHERE status IN ('collecting','active')")->fetchColumn(),
    'completed' => (int)$pdo->query("SELECT COUNT(*) FROM feedback_360_cycles WHERE status='completed'")->fetchColumn(),
    'reviewers' => (int)$pdo->query("SELECT SUM(total_reviewers) FROM feedback_360_cycles")->fetchColumn(),
];

$rows = $pdo->query("
    SELECT c.id, c.status, c.due_date, c.total_reviewers, c.completed_reviewers, c.self_assessment,
           e.name, e.department, e.position,
           r.innovation, r.communication, r.technical_skills, r.collaboration, r.leadership
    FROM feedback_360_cycles c
    JOIN employees e ON e.id = c.subject_id
    LEFT JOIN feedback_360_ratings r ON r.cycle_id = c.id
    ORDER BY c.id DESC
")->fetchAll(PDO::FETCH_ASSOC);

$cycles = array_map(fn($r) => [
    'id'                  => (int)$r['id'],
    'name'                => $r['name'],
    'department'          => $r['department'],
    'position'            => $r['position'],
    'status'              => $r['status'],
    'due_date'            => date('d M Y', strtotime($r['due_date'])),
    'total_reviewers'     => (int)$r['total_reviewers'],
    'completed_reviewers' => (int)$r['completed_reviewers'],
    'self_assessment'     => (bool)$r['self_assessment'],
    'ratings'             => $r['innovation'] ? [
        'innovation'      => (float)$r['innovation'],
        'communication'   => (float)$r['communication'],
        'technical_skills'=> (float)$r['technical_skills'],
        'collaboration'   => (float)$r['collaboration'],
        'leadership'      => (float)$r['leadership'],
    ] : null,
], $rows);

echo json_encode(['stats' => $stats, 'cycles' => $cycles]);
