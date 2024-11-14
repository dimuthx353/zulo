<?php
session_start();
include_once "../db.php";

$userID = $_SESSION["user_id"];

// Ensure user is authenticated
if (!isset($userID)) {
    die('User not authenticated.');
}

try {
    // Fetch the user's shipping address from the users table
    $userQuery = "SELECT address FROM users WHERE user_id = :user_id";
    $stmt = $conn->prepare($userQuery);
    $stmt->bindParam(':user_id', $userID, PDO::PARAM_INT);
    $stmt->execute();
    $userDetails = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$userDetails) {
        die('User details not found.');
    }

    $shippingAddress = $userDetails['address'];  // Get the shipping address from the users table

    // Fetch cart items and product prices using a JOIN between cart and product tables
    $cartQuery = "SELECT c.product_id, c.quantity, p.price 
                  FROM cart c 
                  JOIN products p ON c.product_id = p.product_id 
                  WHERE c.user_id = :user_id";
    $stmt = $conn->prepare($cartQuery);
    $stmt->bindParam(':user_id', $userID, PDO::PARAM_INT);
    $stmt->execute();
    $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // If the cart is empty
    if (empty($cartItems)) {
        die('No items in cart.');
    }

    // Calculate total amount
    $total = 0;
    foreach ($cartItems as $item) {
        $total += $item['quantity'] * $item['price']; // Sum up price * quantity
    }


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
