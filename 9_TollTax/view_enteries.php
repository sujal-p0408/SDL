<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Toll Entries</title>
    <style>
        body { font-family: Arial; background: #f9f9f9; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #333; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        a { display: inline-block; margin-top: 10px; color: blue; }
    </style>
</head>
<body>

<div class="container">
    <h2>All Toll Entries</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Vehicle Number</th>
            <th>Type</th>
            <th>Amount Paid</th>
            <th>Operator</th>
            <th>Date</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM toll_entries ORDER BY id DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['vehicle_number']}</td>
                        <td>{$row['vehicle_type']}</td>
                        <td>₹{$row['amount_paid']}</td>
                        <td>{$row['operator']}</td>
                        <td>{$row['entry_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No entries found.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php">Back to Entry Form</a>
</div>

</body>
</html>
