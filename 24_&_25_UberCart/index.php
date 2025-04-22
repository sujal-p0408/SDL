<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Grocery Store</title>
  <style>
    body { font-family: sans-serif; background: #f0f0f0; padding: 20px; }
    .container { max-width: 700px; margin: auto; background: #fff; padding: 20px; border-radius: 5px; }
    input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 5px; }
    button { padding: 10px; background: green; color: white; border: none; margin-top: 10px; width: 100%; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: center; }
    a { text-decoration: none; color: blue; }
  </style>
</head>
<body>

<div class="container">
  <h2>Grocery Store - Add New Item</h2>
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $price = $conn->real_escape_string($_POST["price"]);

    $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
    if ($conn->query($sql) === TRUE) {
      echo "<p style='color:green;'>Item added successfully.</p>";
    } else {
      echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
  }
  ?>

  <form method="post">
    <label>Item Name:</label>
    <input type="text" name="name" required>

    <label>Price (in ₹):</label>
    <input type="number" step="0.01" name="price" required>

    <button type="submit">Add Item</button>
  </form>

  <h3>Available Products</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price (₹)</th>
      <th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM products ORDER BY id DESC");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['price']}</td>
              <td><a href='add_to_cart.php?id={$row['id']}'>Add to Cart</a></td>
            </tr>";
    }
    ?>
  </table>

  <p><a href="cart.php">🛒 View Cart</a></p>
</div>

</body>
</html>
