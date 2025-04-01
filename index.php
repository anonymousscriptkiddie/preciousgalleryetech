<?php
$pdo = new PDO("mysql:host=your_host;dbname=your_database", "your_username", "your_password");
$comments = $pdo->query("SELECT * FROM comments ORDER BY created_at DESC")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Comment Section</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .comment-box { width: 50%; margin: 10px auto; padding: 10px; border: 1px solid #ddd; background: #f9f9f9; }
    </style>
</head>
<body>
    <h2>Leave a Comment</h2>
    <form action="submit_comment.php" method="post">
        <input type="text" name="user_name" placeholder="Your Name" required><br><br>
        <textarea name="comment_text" placeholder="Write a comment..." required></textarea><br><br>
        <button type="submit">Post Comment</button>
    </form>

    <h2>Comments</h2>
    <?php foreach ($comments as $comment): ?>
        <div class="comment-box">
            <strong><?= htmlspecialchars($comment['user_name']) ?></strong> (<?= $comment['created_at'] ?>)<br>
            <?= nl2br(htmlspecialchars($comment['comment_text'])) ?>
        </div>
    <?php endforeach; ?>
</body>
</html>
