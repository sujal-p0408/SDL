<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales History</title>
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
    <h2>Sales History</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Medicine</th>
            <th>Quantity Sold</th>
            <th>Total Price (₹)</th>
            <th>Date</th>
        </tr>
        <?php
        $query = "SELECT sales.*, medicines.name 
                  FROM sales JOIN medicines ON sales.medicine_id = medicines.id
                  ORDER BY sales.id DESC";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['quantity_sold']}</td>
                        <td>₹{$row['total_price']}</td>
                        <td>{$row['sale_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No sales yet.</td></tr>";
        }
        ?>
    </table>

    <a href="sell_medicine.php">← Back to Sell</a>
</div>

</body>
</html>
