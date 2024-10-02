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

// If user is authenticated and product_id is set, proceed with adding to wishlist
if ($user && isset($product_id)) {
    // Prepare the insert statement using PDO
    $sql = "INSERT INTO wishlist (user_id, product_id) VALUES (:user_id, :product_id)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header('Location: ../../signup/index.php?error=stmtfailed');
        exit();
    }

    // Bind the user ID and product ID parameters
    $stmt->bindParam(':user_id', $userID, PDO::PARAM_INT);  // Bind user_id as integer
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);  // Bind product_id as integer

    // Execute the statement
    if ($stmt->execute()) {
        header('Location: ../../../../../zulo/');
    } else {
        header('Location: google.lk?error');
    }
}
