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

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
