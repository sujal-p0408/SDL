<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
    if ($conn->query($sql)) {
        echo "Registration successful. <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Register</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>
