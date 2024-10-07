<?php

include_once "../../db.php";
include_once "../../function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $productName = $_POST['productName'] ?? ''; // Get the product name
    $description = $_POST['description'] ?? ''; // Get the description
    $price = $_POST['price'] ?? ''; // Get the price
    $stock = $_POST['stock'] ?? ''; // Get the stock
    $imageUrl = $_POST['imageUrl'] ?? ''; // Get the image URL
    $category = $_POST['category'] ?? ''; // Get the category (1 for Men, 2 for Women)
    $sku = $_POST['sku'] ?? ''; // Get the category (1 for Men, 2 for Women)
    $subCategory = $_POST['subCategories'] ?? ''; // Get the category (1 for Men, 2 for Women)

    // Validate if required fields are filled
    if (!empty($productName) && !empty($description) && !empty($price) && !empty($stock) && !empty($imageUrl)) {
        // Prepare the SQL query to insert the product
        $sql = "INSERT INTO products (product_name, description, price, stock_quantity, image_url, category_id,sku,subCategory) 
                VALUES (:productName, :description, :price, :stock, :imageUrl, :category,:sku,:subCategory)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':imageUrl', $imageUrl);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':sku', $sku);
        $stmt->bindParam(':subCategory', $subCategory);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo "Product added successfully!";
        } else {
            echo "Error adding product.";
        }
    } else {
        echo "Please fill all fields.";
    }
}
