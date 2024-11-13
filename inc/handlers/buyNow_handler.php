<?php
include_once "../db.php"; // Assuming db.php sets up a PDO connection

session_start();

$user = false;
$userID = null;

if (isset($_SESSION["email"])) {
    $user = true;

    // Get the email from the session
    $email = $_SESSION["email"];

    // Prepare and execute the query to fetch user ID using PDO
    $sql = "SELECT user_id FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);  // Bind email parameter
    $stmt->execute();

   
}