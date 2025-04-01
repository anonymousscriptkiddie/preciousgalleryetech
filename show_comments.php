<?php
$pdo = new PDO("mysql:host=localhost;dbname=preciousgallery", "root", "");

// Get all comments
$stmt = $pdo->query("SELECT * FROM comments ORDER BY created_at DESC");
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Show comments
foreach ($comments as $comment) {
    echo "<p><strong>{$comment['user_name']}:</strong> {$comment['comment_text']} ({$comment['created_at']})</p>";
}
?>
