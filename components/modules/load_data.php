<?php
// Data Table Connect
require_once("db_connect.php");

// Download Date
function fetchData($url) {
    $data = file_get_contents($url);
    return json_decode($data, true);
}

try {
    // Create PDO 
    $dsn = "mysql:host=$servername;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);

    // URL JSON Files
    $postsJsonUrl = "https://jsonplaceholder.typicode.com/posts";
    $commentsJsonUrl = "https://jsonplaceholder.typicode.com/comments";

    // Download And Paste Blog
    $postsData = fetchData($postsJsonUrl);
    foreach ($postsData as $post) {
        $id = $post['id'];
        $userId = $post['userId'];
        $title = $post['title'];
        $body = $post['body'];

        $stmt = $pdo->prepare("INSERT INTO posts (id, userId, title, body) VALUES (?, ?, ?, ?)");
        $stmt->execute([$id, $userId, $title, $body]);
    }

    // Download And Paste Comments
    $commentsData = fetchData($commentsJsonUrl);
    foreach ($commentsData as $comment) {
        $id = $comment['id'];
        $postId = $comment['postId'];
        $name = $comment['name'];
        $email = $comment['email'];
        $commentBody = $comment['body'];

        $stmt = $pdo->prepare("INSERT INTO comments (id, postId, name, email, body) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$id, $postId, $name, $email, $commentBody]);
    }

    // Return
    echo "Загружено " . count($postsData) . " записей и " . count($commentsData) . " комментариев.";
} catch (PDOException $e) {
    die("Ошибка: " . $e->getMessage());
}
?>
