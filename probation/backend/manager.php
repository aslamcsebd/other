<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
require_once 'db.php';

$manager_id = (int)($_GET['manager_id'] ?? 9);

// Manager info
$mgr = $pdo->prepare("SELECT id, name, department, position FROM employees WHERE id = ?");
$mgr->execute([$manager_id]);
$manager = $mgr->fetch(PDO::FETCH_ASSOC);

// All managers list
$managers = $pdo->query("SELECT id, name, position FROM employees WHERE id IN (SELECT DISTINCT manager_id FROM employees WHERE manager_id IS NOT NULL)")->fetchAll(PDO::FETCH_ASSOC);

// Team members on probation
$team = $pdo->prepare("
    SELECT e.id, e.name, e.department, e.position, e.email, e.status,
        COUNT(pr.id) as review_count,
        SUM(CASE WHEN pr.outcome IS NULL AND pr.review_date >= CURDATE() THEN 1 ELSE 0 END) as upcoming_reviews
    FROM employees e
    LEFT JOIN probation_reviews pr ON pr.employee_id = e.id
    WHERE e.manager_id = ? AND e.status = 'probation'
    GROUP BY e.id
");
$team->execute([$manager_id]);
$team_members = $team->fetchAll(PDO::FETCH_ASSOC);

// Reviews for this manager's team
$reviews = $pdo->prepare("
    SELECT pr.id, e.name, e.department, pr.review_type, pr.review_date, pr.outcome, pr.signed,
        CASE
            WHEN pr.outcome IS NOT NULL AND pr.signed = 1 THEN 'completed'
            WHEN pr.outcome IS NOT NULL AND pr.signed = 0 THEN 'awaiting_signature'
            WHEN pr.review_date >= CURDATE() THEN 'scheduled'
            ELSE 'in_progress'
        END as status
    FROM probation_reviews pr
    JOIN employees e ON e.id = pr.employee_id
    WHERE e.manager_id = ?
    ORDER BY pr.review_date DESC
    LIMIT 10
");
$reviews->execute([$manager_id]);
$review_list = array_map(fn($r) => array_merge($r, ['review_date' => date('d M Y', strtotime($r['review_date']))]), $reviews->fetchAll(PDO::FETCH_ASSOC));

// Objectives
$objs = $pdo->prepare("
    SELECT o.id, o.title, o.score, e.name as employee_name
    FROM objectives o
    JOIN employees e ON e.id = o.employee_id
    WHERE e.manager_id = ?
    ORDER BY e.name
");
$objs->execute([$manager_id]);
$objectives = $objs->fetchAll(PDO::FETCH_ASSOC);

// Upward feedback for this manager
$feedback = $pdo->prepare("
    SELECT ROUND(AVG(overall_rating),1) as avg_rating, COUNT(*) as count
    FROM upward_feedback WHERE manager_id = ?
");
$feedback->execute([$manager_id]);
$fb = $feedback->fetch(PDO::FETCH_ASSOC);

$stats = [
    'team_on_probation' => count($team_members),
    'active_reviews'    => count(array_filter($review_list, fn($r) => in_array($r['status'], ['scheduled','in_progress']))),
    'action_required'   => count(array_filter($review_list, fn($r) => $r['status'] === 'awaiting_signature')),
    'objectives_set'    => count($objectives),
    'objectives_scored' => count(array_filter($objectives, fn($o) => $o['score'] !== null)),
];

echo json_encode(compact('manager','managers','stats','team_members','review_list','objectives','fb'));
