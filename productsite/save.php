<?php
$conn = new mysqli("localhost", "root", "", "structure");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$product = $_POST['product'];
$date = $_POST['date'];
$model = $_POST['model'];
$price = $_POST['price'];
$category = $_POST['category'];

$sql = "INSERT INTO products (product, date, model, price, category)
        VALUES ('$product', '$date', '$model', '$price', '$category')";

if ($conn->query($sql) === TRUE) {
  echo "✅ Product saved successfully! <br><a href='view.php'>View Products</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
