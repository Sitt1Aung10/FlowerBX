<?php
header('Content-Type: application/json');

// Database connection details
$host = "localhost";
$dbname = "flowerbx";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Fetch data from the table
$sql = "SELECT id, title, image, link FROM allProducts";
$result = $conn->query($sql);

$products = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Return data as JSON
echo json_encode($products);

// Close the connection
$conn->close();
?>
