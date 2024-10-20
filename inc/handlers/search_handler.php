<?php
$serverName = "localhost:3307";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=zulo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if (isset($_GET["searchQuery"])) {

    $searchQuery = $_GET["searchQuery"];


    $sql = "SELECT product_id,product_name, description, price, stock_quantity, image_url, sku FROM products WHERE  product_name LIKE '%" . $searchQuery . "%'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($products);
}
