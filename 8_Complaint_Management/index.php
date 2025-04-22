<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Complaint Form</title>
    <style>
        body { font-family: Arial; padding: 20px; background-color: #f0f0f0; }
        .container { background: white; padding: 20px; max-width: 500px; margin: auto; border-radius: 5px; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px 15px; background: green; color: white; border: none; }
        .message { padding: 10px; margin-top: 10px; }
        .success { background: #d4edda; color: green; }
        .error { background: #f8d7da; color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Submit a Complaint</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST["name"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $subject = $conn->real_escape_string($_POST["subject"]);
        $message = $conn->real_escape_string($_POST["message"]);

        $sql = "INSERT INTO complaints (name, email, subject, message) 
                VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message success'>Complaint submitted successfully!</div>";
        } else {
            echo "<div class='message error'>Error: " . $conn->error . "</div>";
        }
    }
    ?>

    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Subject:</label>
        <input type="text" name="subject" required>

        <label>Message:</label>
        <textarea name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <p style="text-align:center; margin-top: 20px;">
        <a href="view_complaints.php">View All Complaints (Admin)</a>
    </p>
</div>

</body>
</html>
