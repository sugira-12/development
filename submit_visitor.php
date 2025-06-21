<?php
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $reason = trim($_POST['reason']);
    $student = trim($_POST['student']);

    // Simple sanitization
    if (empty($fullname) || empty($reason) || empty($student)) {
        die('Please fill all required fields.');
    }

    // Simple categorization (keyword matching)
    $categories = [
        'academic' => ['class', 'exam', 'study', 'project', 'homework'],
        'personal' => ['visit', 'friend', 'family', 'relative'],
        'official' => ['meeting', 'admin', 'principal', 'office'],
    ];

    $category = 'general';
    $reasonLower = strtolower($reason);
    foreach ($categories as $cat => $keywords) {
        foreach ($keywords as $word) {
            if (strpos($reasonLower, $word) !== false) {
                $category = $cat;
                break 2;
            }
        }
    }

    // Insert to DB with prepared statement
    $stmt = $pdo->prepare('INSERT INTO visitors (fullname, reason, student, category) VALUES (?, ?, ?, ?)');
    $stmt->execute([$fullname, $reason, $student, $category]);

    header('Location: view_visitors.php');
    exit;
} else {
    die('Invalid request method');
}
?>
