<?php
// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "website");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query all products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Display table
echo "<h1>Product Inventory</h1>";
echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Product</th>
        <th>Date</th>
        <th>Model</th>
        <th>Price</th>
        <th>Category</th>
      </tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['product']."</td>
            <td>".$row['date']."</td>
            <td>".$row['model']."</td>
            <td>".$row['price']."</td>
            <td>".$row['category']."</td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='6'>No products found</td></tr>";
}

echo "</table>";

$conn->close();
?>
