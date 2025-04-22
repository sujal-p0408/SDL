<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        input, textarea { width: 100%; padding: 10px; margin: 8px 0; }
        button { padding: 10px 15px; background: green; color: white; border: none; }
        .message { padding: 10px; margin-top: 10px; }
        .success { background: #d4edda; color: green; }
        .error { background: #f8d7da; color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Medicine</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST["name"]);
        $company = $conn->real_escape_string($_POST["company"]);
        $quantity = $conn->real_escape_string($_POST["quantity"]);
        $price = $conn->real_escape_string($_POST["price"]);
        $expiry = $conn->real_escape_string($_POST["expiry"]);

        $sql = "INSERT INTO medicines (name, company, quantity, price, expiry_date)
                VALUES ('$name', '$company', '$quantity', '$price', '$expiry')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message success'>Medicine added successfully!</div>";
        } else {
            echo "<div class='message error'>Error: " . $conn->error . "</div>";
        }
    }
    ?>

    <form method="post">
        <label>Medicine Name:</label>
        <input type="text" name="name" required>

        <label>Company:</label>
        <input type="text" name="company" required>

        <label>Quantity:</label>
        <input type="number" name="quantity" required>

        <label>Price (₹):</label>
        <input type="number" step="0.01" name="price" required>

        <label>Expiry Date:</label>
        <input type="date" name="expiry" required>

        <button type="submit">Add Medicine</button>
    </form>

    <p style="text-align:center; margin-top: 20px;">
        <a href="view_medicines.php">View All Medicines (Admin)</a>
    </p>
</div>

</body>
</html>
