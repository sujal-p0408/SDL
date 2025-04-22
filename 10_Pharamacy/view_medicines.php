<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Medicines</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #eee; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; }
        th { background: #333; color: white; }
        tr:nth-child(even) { background: #f2f2f2; }
        a { display: inline-block; margin-top: 15px; }
    </style>
</head>
<body>

<div class="container">
    <h2>All Medicines</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Qty</th>
            <th>Price (₹)</th>
            <th>Expiry</th>
            <th>Added On</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM medicines ORDER BY id DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['company']}</td>
                        <td>{$row['quantity']}</td>
                        <td>₹{$row['price']}</td>
                        <td>{$row['expiry_date']}</td>
                        <td>{$row['added_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No medicines found.</td></tr>";
        }
        ?>
    </table>

    <a href="index.php">← Back to Add Medicine</a>
</div>

</body>
</html>
