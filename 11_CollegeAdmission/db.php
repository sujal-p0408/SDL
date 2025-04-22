<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "college"; // Change if your DB name is different

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
