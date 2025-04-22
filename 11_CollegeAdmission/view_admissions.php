<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admission Records</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #eee; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 6px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #333; color: white; }
        tr:nth-child(even) { background: #f2f2f2; }
        a { display: inline-block; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h2>All Admissions</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Date</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM admissions ORDER BY id DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['course']}</td>
                        <td>{$row['admission_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No admissions yet.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php">← Back to Admission Form</a>
</div>

</body>
</html>
