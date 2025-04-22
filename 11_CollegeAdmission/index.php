<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>College Admission Form</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 6px; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; }
        button { background: green; color: white; padding: 10px; border: none; width: 100%; }
        .msg { padding: 10px; margin-bottom: 10px; }
        .success { background: #d4edda; color: green; }
        .error { background: #f8d7da; color: red; }
        a { display: block; text-align: center; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Admission Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST["name"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $phone = $conn->real_escape_string($_POST["phone"]);
        $course = $conn->real_escape_string($_POST["course"]);

        $sql = "INSERT INTO admissions (full_name, email, phone, course)
                VALUES ('$name', '$email', '$phone', '$course')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='msg success'>Admission submitted successfully!</div>";
        } else {
            echo "<div class='msg error'>Error: " . $conn->error . "</div>";
        }
    }
    ?>

    <form method="post">
        <label>Full Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Course:</label>
        <select name="course" required>
            <option value="">--Select Course--</option>
            <option value="B.Tech">B.Tech</option>
            <option value="BBA">BBA</option>
            <option value="BCA">BCA</option>
            <option value="MBA">MBA</option>
            <option value="MCA">MCA</option>
        </select>

        <button type="submit">Submit Admission</button>
    </form>

    <a href="view_admissions.php">View Admissions</a>
</div>

</body>
</html>
