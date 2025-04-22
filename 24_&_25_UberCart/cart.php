<?php
session_start();
include 'db.php';

$cartItems = $_SESSION["cart"] ?? [];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Cart</title>
  <style>
    body { font-family: sans-serif; background: #f0f0f0; padding: 20px; }
    .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 6px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
    button, a { margin-top: 10px; display: inline-block; padding: 8px 12px; background: darkred; color: white; text-decoration: none; border: none; }
  </style>
</head>
<body>

<div class="container">
  <h2>Your Cart</h2>

  <?php
  if (empty($cartItems)) {
    echo "<p>Your cart is empty.</p>";
  } else {
    $ids = implode(",", $cartItems);
    $result = $conn->query("SELECT * FROM products WHERE id IN ($ids)");
    $total = 0;

    echo "<table>
            <tr><th>Name</th><th>Price (₹)</th></tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['name']}</td>
              <td>{$row['price']}</td>
            </tr>";
      $total += $row['price'];
    }
    echo "</table>";
    echo "<h4>Total: ₹" . number_format($total, 2) . "</h4>";
  }
  ?>

  <a href="index.php">← Back to Store</a>
  <a href="clear_cart.php">Clear Cart</a>
</div>

</body>
</html>
