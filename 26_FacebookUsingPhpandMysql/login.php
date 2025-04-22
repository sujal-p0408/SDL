<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $res = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();
        if (password_verify($pass, $user['password'])) {
            $_SESSION["user"] = $user;
            header("Location: home.php");
            exit();
        } else {
            echo "Wrong password";
        }
    } else {
        echo "No such user";
    }
}
?>

<h2>Login</h2>
<form method="post">
  Email: <input type="email" name="email" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  <button type="submit">Login</button>
</form>
