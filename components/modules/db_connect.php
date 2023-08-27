<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Data Table Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get Errors
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
