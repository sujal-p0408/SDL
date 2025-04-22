<?php
session_start();
include 'db.php';
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

$content = $conn->real_escape_string($_POST["content"]);
$user_id = $_SESSION["user"]["id"];

$conn->query("INSERT INTO posts (user_id, content) VALUES ($user_id, '$content')");

header("Location: home.php");
