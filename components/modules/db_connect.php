<?php
$servername = "localhost"; //Server Name (Change)
$username = "root"; //User Name (Change)
$password = ""; //Data Table Password (Change)
$dbname = "test"; //Created Data Table Name (Change)

// Data Table Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get Errors
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
