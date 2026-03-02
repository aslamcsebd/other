<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { http_response_code(200); exit; }

require_once 'db.php';

$data = json_decode(file_get_contents('php://input'), true);

$review_id   = (int)($data['review_id'] ?? 0);
$title       = trim($data['title'] ?? '');
$description = trim($data['description'] ?? '');
$category    = trim($data['category'] ?? 'custom');
$target_date = $data['target_date'] ?? null;
$weight      = (int)($data['weight'] ?? 20);
$review_type = trim($data['review_type'] ?? 'mid probation');

if (!$review_id || !$title) {
    http_response_code(400);
    echo json_encode(['error' => 'review_id and title are required']);
    exit;
}

// Get employee_id from review
$stmt = $pdo->prepare("SELECT employee_id FROM probation_reviews WHERE id = ?");
$stmt->execute([$review_id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    http_response_code(404);
    echo json_encode(['error' => 'Review not found']);
    exit;
}

$insert = $pdo->prepare("
    INSERT INTO objectives (employee_id, title, description, category, weight, target_date, review_type)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
$insert->execute([
    $row['employee_id'],
    $title,
    $description ?: null,
    $category,
    $weight,
    $target_date ?: null,
    $review_type,
]);

$new_id = $pdo->lastInsertId();

echo json_encode([
    'success' => true,
    'objective' => [
        'id'          => (int)$new_id,
        'title'       => $title,
        'description' => $description,
        'category'    => $category,
        'weight'      => $weight,
        'score'       => null,
        'self_score'  => null,
        'target_date' => $target_date ? date('d M Y', strtotime($target_date)) : null,
        'completed'   => false,
    ]
]);
