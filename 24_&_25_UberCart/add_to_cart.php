<?php
session_start();
include 'db.php';

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $_SESSION["cart"][] = $id;
}

header("Location: index.php");
exit();
