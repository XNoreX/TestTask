<?php
// Data Table Connection
require_once("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get Text For Find To Form
    $searchText = $_POST["searchText"];

    // SQL Find By Comment
    $sql = "SELECT posts.title, comments.body FROM posts
        JOIN comments ON posts.id = comments.postId
        WHERE comments.body LIKE '%" . $searchText . "%'";

    $result = $conn->query($sql);

    // Return
    if ($result->num_rows > 0) {
        echo "<h2>Результаты поиска:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Заголовок записи:</strong> " . $row["title"] . "</p>";
            echo "<p><strong>Комментарий:</strong> " . $row["body"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "Ничего не найдено.";
    }
}
?>
