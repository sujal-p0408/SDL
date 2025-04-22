<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Sell Medicine</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        select, input { width: 100%; padding: 10px; margin: 8px 0; }
        button { padding: 10px; background: green; color: white; border: none; }
        .message { padding: 10px; margin-top: 10px; }
        .success { background: #d4edda; color: green; }
        .error { background: #f8d7da; color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Sell Medicine</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $medicine_id = $_POST["medicine_id"];
        $quantity_sold = $_POST["quantity_sold"];

        // Get medicine details
        $medicine = $conn->query("SELECT * FROM medicines WHERE id = $medicine_id")->fetch_assoc();

        if ($medicine && $medicine['quantity'] >= $quantity_sold) {
            $new_qty = $medicine['quantity'] - $quantity_sold;
            $total_price = $quantity_sold * $medicine['price'];

            // Update medicine quantity
            $conn->query("UPDATE medicines SET quantity = $new_qty WHERE id = $medicine_id");

            // Record the sale
            $conn->query("INSERT INTO sales (medicine_id, quantity_sold, total_price) 
                          VALUES ($medicine_id, $quantity_sold, $total_price)");

            echo "<div class='message success'>Sale recorded. Total ₹$total_price</div>";
        } else {
            echo "<div class='message error'>Not enough stock available.</div>";
        }
    }

    $medicines = $conn->query("SELECT id, name, quantity FROM medicines");
    ?>

    <form method="post">
        <label>Select Medicine:</label>
        <select name="medicine_id" required>
            <option value="">-- Select --</option>
            <?php while ($row = $medicines->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['name']} (Available: {$row['quantity']})</option>";
            } ?>
        </select>

        <label>Quantity to Sell:</label>
        <input type="number" name="quantity_sold" min="1" required>

        <button type="submit">Sell</button>
    </form>

    <p style="text-align:center; margin-top: 20px;">
        <a href="sales_history.php">View Sales History</a> | <a href="index.php">Back to Add Medicine</a>
    </p>
</div>

</body>
</html>
