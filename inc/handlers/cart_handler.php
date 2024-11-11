<?php
include_once "../db.php"; // Assuming db.php sets up a PDO connection

session_start();

$user = false;
$userID = null;

// Check if the session contains an email
if (isset($_SESSION["email"])) {
    $user = true;

    // Get the email from the session
    $email = $_SESSION["email"];

    // Prepare and execute the query to fetch user ID using PDO
    $sql = "SELECT user_id FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);  // Bind email parameter
    $stmt->execute();

    // Check if a user is found
    if ($stmt->rowCount() > 0) {
        // Fetch the user ID
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $userID = $row['user_id'];
    } else {
        echo "No user found with this email.";
        $user = false;
    }
}

if (isset($_GET['product_id'])) {
    $product_id = (int)$_GET['product_id']; // Cast it to an integer for safety
    
} else {
    die('Product ID not provided in the URL.');
}