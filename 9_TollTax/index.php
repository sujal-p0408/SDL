<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Toll Entry Form</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; padding: 20px; }
        .container { background: #fff; padding: 20px; max-width: 500px; margin: auto; border-radius: 5px; }
        input, select { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px 15px; background: green; color: white; border: none; }
        .message { padding: 10px; margin-top: 10px; }
        .success { background: #d4edda; color: green; }
        .error { background: #f8d7da; color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Record Toll Entry</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vehicle_number = $conn->real_escape_string($_POST["vehicle_number"]);
        $vehicle_type = $conn->real_escape_string($_POST["vehicle_type"]);
        $amount_paid = $conn->real_escape_string($_POST["amount_paid"]);
        $operator = $conn->real_escape_string($_POST["operator"]);

        $sql = "INSERT INTO toll_entries (vehicle_number, vehicle_type, amount_paid, operator)
                VALUES ('$vehicle_number', '$vehicle_type', '$amount_paid', '$operator')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='message success'>Toll entry recorded successfully!</div>";
        } else {
            echo "<div class='message error'>Error: " . $conn->error . "</div>";
        }
    }
    ?>

    <form method="post">
        <label>Vehicle Number:</label>
        <input type="text" name="vehicle_number" required>

        <label>Vehicle Type:</label>
        <select name="vehicle_type" required>
            <option value="">--Select--</option>
            <option>Car</option>
            <option>Truck</option>
            <option>Bus</option>
            <option>Bike</option>
        </select>

        <label>Amount Paid (₹):</label>
        <input type="number" name="amount_paid" required>

        <label>Operator Name:</label>
        <input type="text" name="operator" required>

        <button type="submit">Submit Entry</button>
    </form>

    <p style="text-align:center; margin-top: 20px;">
        <a href="view_entries.php">View All Toll Entries (Admin)</a>
    </p>
</div>

</body>
</html>
