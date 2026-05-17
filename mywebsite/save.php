<?php
$servername = "localhost";
$username = "root"; // default XAMPP user
$password = "";     // default XAMPP password is empty
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$product = $_POST['product'];
$date = $_POST['date'];
$model = $_POST['model'];
$price = $_POST['price'];
$category = $_POST['category'];

// Insert into database
$sql = "INSERT INTO products (product, date, model, price, category)
        VALUES ('$product', '$date', '$model', '$price', '$category')";

if ($conn->query($sql) === TRUE) {
  echo "New product saved successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
