<?php
$conn = new mysqli("localhost", "root", "", "fb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
