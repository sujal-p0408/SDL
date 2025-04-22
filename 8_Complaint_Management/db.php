<?php
$host = "localhost";     // Your DB host
$user = "root";          // DB username
$password = "";          // DB password
$dbname = "complaints_db"; // Database name

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
