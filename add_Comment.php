<?php
$pdo = new PDO("mysql:host=localhost;dbname=preciousgallery", "root", "");

// Manually define the comment
$user_name = "Prexcious";
$comment_text = "This is a sample comment added without an HTML form.";

// Insert into database
$stmt = $pdo->prepare("INSERT INTO comments (user_name, comment_text) VALUES (?, ?)");
$stmt->execute([$user_name, $comment_text]);

echo "Comment added successfully!";
?>
