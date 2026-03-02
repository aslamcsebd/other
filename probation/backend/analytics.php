<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'db.php';

// Stats
$in_probation = (int)$pdo->query("SELECT COUNT(*) FROM employees WHERE status='probation'")->fetchColumn();

$total_decided = (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NOT NULL")->fetchColumn();
$passed = (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome='passed'")->fetchColumn();
$pass_rate = $total_decided > 0 ? round(($passed / $total_decided) * 100) : 0;

$avg_feedback = (float)$pdo->query("SELECT ROUND(AVG(overall_rating),1) FROM upward_feedback")->fetchColumn();
$cycles_360 = (int)$pdo->query("SELECT COUNT(*) FROM feedback_360_cycles")->fetchColumn();

// Probation Outcomes pie
$outcomes_raw = $pdo->query("
    SELECT outcome, COUNT(*) as cnt FROM probation_reviews
    WHERE outcome IS NOT NULL GROUP BY outcome
    UNION ALL
    SELECT 'pending', COUNT(*) FROM probation_reviews WHERE outcome IS NULL
")->fetchAll(PDO::FETCH_ASSOC);

$outcome_colors = ['passed'=>'hsl(230,65%,48%)','extended'=>'hsl(160,55%,42%)','failed'=>'hsl(40,95%,55%)','pending'=>'hsl(0,72%,51%)'];
$total_outcomes = array_sum(array_column($outcomes_raw, 'cnt'));
$outcomes = array_map(fn($r) => [
    'name'    => ucfirst($r['outcome']),
    'value'   => (int)$r['cnt'],
    'percent' => $total_outcomes > 0 ? round(($r['cnt'] / $total_outcomes) * 100) : 0,
    'color'   => $outcome_colors[$r['outcome']] ?? 'hsl(230,65%,48%)',
], $outcomes_raw);

// Department overview
$dept_rows = $pdo->query("
    SELECT e.department as dept,
        SUM(CASE WHEN e.status='probation' THEN 1 ELSE 0 END) as in_probation,
        SUM(CASE WHEN pr.outcome IS NOT NULL AND pr.signed=1 THEN 1 ELSE 0 END) as completed
    FROM employees e
    LEFT JOIN probation_reviews pr ON pr.employee_id = e.id
    GROUP BY e.department
")->fetchAll(PDO::FETCH_ASSOC);
$departments = array_map(fn($r) => [
    'dept'        => substr($r['dept'], 0, 5),
    'in_probation'=> (int)$r['in_probation'],
    'completed'   => (int)$r['completed'],
], $dept_rows);

// Review pipeline (horizontal bar)
$pipeline = [
    ['status' => 'Scheduled',    'count' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NULL AND review_date >= CURDATE()")->fetchColumn()],
    ['status' => 'In Progress',  'count' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NULL AND review_date < CURDATE()")->fetchColumn()],
    ['status' => 'Pending Sign', 'count' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NOT NULL AND signed=0")->fetchColumn()],
    ['status' => 'Completed',    'count' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NOT NULL AND signed=1")->fetchColumn()],
];

// Upward feedback trends (monthly)
$months = ['Jan','Feb','Mar','Apr'];
$trend_data = [];
for ($i = 3; $i >= 0; $i--) {
    $month = date('Y-m', strtotime("-$i months"));
    $row = $pdo->prepare("SELECT ROUND(AVG(communication_rating),1) as leadership, ROUND(AVG(leadership_rating),1) as communication, ROUND(AVG(support_rating),1) as support FROM upward_feedback WHERE DATE_FORMAT(submitted_at,'%Y-%m') = ?");
    $row->execute([$month]);
    $data = $row->fetch(PDO::FETCH_ASSOC);
    $trend_data[] = [
        'month'        => $months[3 - $i],
        'leadership'   => (float)($data['leadership'] ?? 0),
        'communication'=> (float)($data['communication'] ?? 0),
        'support'      => (float)($data['support'] ?? 0),
    ];
}

echo json_encode([
    'stats' => [
        'in_probation' => $in_probation,
        'pass_rate'    => $pass_rate,
        'avg_feedback' => $avg_feedback,
        'cycles_360'   => $cycles_360,
    ],
    'outcomes'    => $outcomes,
    'departments' => $departments,
    'pipeline'    => $pipeline,
    'trends'      => $trend_data,
]);
