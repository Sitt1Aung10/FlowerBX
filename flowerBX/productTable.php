<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Database connection details
$host = "localhost";
$dbname = "flowerbx";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop the table if it exists
$sql = "DROP TABLE IF EXISTS allProducts";
if ($conn->query($sql) === TRUE) {
//     echo "Table allProducts dropped successfully!<br>";
} else {
    echo "Error dropping table: " . $conn->error . "<br>";
}

// Create the table without a primary key
$sql = "CREATE TABLE allProducts (
 id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    image VARCHAR(255),
    link VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
//     echo "Table allProducts created successfully!<br>";
} else {
//     echo "Error creating table: " . $conn->error . "<br>";
}

// PHP array equivalent to your JavaScript array
$products = [
    [
        'title' => "BOUDOR PEONY",
        'image' => "img/peony_boudoir_peony_vase1_2 (1).jpg",
        'link' => "",
    ],
    [
        'title' => "FRAMBOISE FRENCH PEONY",
        'image' => "img/peony_boudoir_peony_vase1_2.jpg",
        'link' => "",
    ],
    [
        'title' => "PRIMROSE FRENCH PEONY",
        'image' => "img/peony_carnival_peony_vase1_2.jpg",
        'link' => "",
    ],
    [
        'title' => "LIL DARLING FRENCH PEONY",
        'image' => "img/peony_cotton_cloud_peony_wrap_2.jpg",
        'link' => "",
    ],
    [
        'title' => "CARNIVAL FRENCH PEONY",
        'image' => "img/peony_flamingo_peony_wrap_2.jpg",
        'link' => "",
    ],
    [
        'title' => "FLAMINGO FRENCH PONY",
        'image' => "img/peony_framboise_peony_vase1_2.jpg",
        'link' => "",
    ],
    [
        'title' => "COTTON CLOUD FRENCH PEONY",
        'image' => "img/peony_lil_darling_peony_vase1_2 (1).jpg",
        'link' => "",
    ],
    [
        'title' => "PEONY SCENTED CANDLE",
        'image' => "img/peony_lil_darling_peony_vase1_2.jpg",
        'link' => "",
    ],
    [
        'title' => "ROYAL WINDSORE VASE",
        'image' => "img/peony_primrose_peony_vase_4.jpg",
        'link' => "",
    ],
];

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO allProducts (title, image, link) VALUES (?, ?, ?)");

// Loop through each product and insert into the table
foreach ($products as $product) {
    if (isset($product['title'], $product['image'], $product['link'])) {
        $stmt->bind_param("sss", $product['title'], $product['image'], $product['link']);
        
        // Execute the query
        if ($stmt->execute() === TRUE) {
          //   echo "Data for product {$product['title']} inserted successfully!<br>";
        } else {
          //   echo "Error inserting data for product {$product['title']}: " . $stmt->error . "<br>";
        }
    } else {
     //    echo "Error: Missing key in product array. Product data: " . print_r($product, true) . "<br>";
    }
}

// Close the connection
$conn->close();
?>
