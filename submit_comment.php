<?php
$pdo = new PDO("mysql:host=localhost;dbname=preciousgallery", "root", "");

$user_name = $_POST['user_name'];
$comment_text = $_POST['comment_text'];

$stmt = $pdo->prepare("INSERT INTO comments (user_name, comment_text) VALUES (?, ?)");
$stmt->execute([$user_name, $comment_text]);

header("Location: index.html");
exit;
?>
