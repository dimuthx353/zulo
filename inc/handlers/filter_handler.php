<?php

include_once "../db.php";

$sort = $_GET["sort"];

if ($sort == "ASC") {
    $sql = "SELECT product_id, product_name, description, price, stock_quantity, image_url, sku FROM products ORDER BY price ASC";
} else if ($sort == "DESC") {
    $sql = "SELECT product_id, product_name, description, price, stock_quantity, image_url, sku FROM products ORDER BY price DESC";
} else {
    $sql = "SELECT product_id, product_name, description, price, stock_quantity, image_url, sku FROM products";
}

$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($products);
