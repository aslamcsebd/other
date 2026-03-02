<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

require_once 'db.php';

// Stats
$stats = [
  'in_probation'       => (int)$pdo->query("SELECT COUNT(*) FROM employees WHERE status='probation'")->fetchColumn(),
  'overdue_reviews'    => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE review_date < CURDATE() AND outcome IS NULL")->fetchColumn(),
  'pending_signatures' => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE signed=0 AND outcome IS NOT NULL")->fetchColumn(),
  'completed_reviews'  => (int)$pdo->query("SELECT COUNT(*) FROM probation_reviews WHERE outcome IS NOT NULL")->fetchColumn(),
];

// Outcomes
$rows = $pdo->query("SELECT outcome, COUNT(*) as cnt FROM probation_reviews WHERE outcome IS NOT NULL GROUP BY outcome")->fetchAll(PDO::FETCH_ASSOC);
$outcomes = array_map(fn($r) => ['name' => ucfirst($r['outcome']), 'value' => (int)$r['cnt']], $rows);

// By Department
$deptRows = $pdo->query("
  SELECT e.department as dept,
    COUNT(pr.id) as reviews,
    SUM(CASE WHEN pr.outcome IS NULL THEN 1 ELSE 0 END) as pending
  FROM employees e
  LEFT JOIN probation_reviews pr ON pr.employee_id = e.id
  GROUP BY e.department
")->fetchAll(PDO::FETCH_ASSOC);
$departments = array_map(fn($r) => [
  'dept'    => substr($r['dept'], 0, 4),
  'reviews' => (int)$r['reviews'],
  'pending' => (int)$r['pending'],
], $deptRows);

// Upcoming reviews
$upcomingRows = $pdo->query("
  SELECT e.name, pr.review_type as type,
    DATE_FORMAT(pr.review_date,'%d %b') as date,
    (pr.review_date = CURDATE()) as is_today
  FROM probation_reviews pr
  JOIN employees e ON e.id = pr.employee_id
  WHERE pr.review_date >= CURDATE() AND pr.outcome IS NULL
  ORDER BY pr.review_date ASC
  LIMIT 5
")->fetchAll(PDO::FETCH_ASSOC);
$upcoming = array_map(fn($r) => [
  'name'     => $r['name'],
  'type'     => $r['type'],
  'date'     => $r['date'],
  'is_today' => (bool)$r['is_today'],
], $upcomingRows);

echo json_encode(compact('stats', 'outcomes', 'departments', 'upcoming'));
