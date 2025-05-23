<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Complaints</title>
    <style>
        body { font-family: Arial; padding: 20px; background-color: #f9f9f9; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #333; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        a { display: inline-block; margin-top: 10px; color: blue; }
    </style>
</head>
<body>

<div class="container">
    <h2>All Complaints</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM complaints ORDER BY id DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['message']}</td>
                        <td>{$row['date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No complaints found.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php">Back to Form</a>
</div>

</body>
</html>
