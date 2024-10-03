<?php
session_start();
include_once "../../inc/db.php";

// Check if the user is logged in
if (isset($_SESSION["user_id"])) {
    $userID = $_SESSION["user_id"];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and retrieve form inputs
        $first_name = htmlspecialchars(trim($_POST['first_name']));
        $last_name = htmlspecialchars(trim($_POST['last_name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone_number = htmlspecialchars(trim($_POST['phone_number']));
        $address = htmlspecialchars(trim($_POST['address']));
        $city = htmlspecialchars(trim($_POST['city']));
        $postal_code = htmlspecialchars(trim($_POST['postal_code']));
        $country = htmlspecialchars(trim($_POST['country']));
        $province = htmlspecialchars(trim($_POST['province']));

        // Optional password change
        $password = trim($_POST['password']);
        if (!empty($password)) {
            // Hash the new password if provided
            $password = password_hash($password, PASSWORD_DEFAULT);
        }

        // Prepare SQL query
        $sql = "UPDATE users 
                SET first_name = :first_name, last_name = :last_name, email = :email, phone_number = :phone_number, 
                    address = :address, city = :city, postal_code = :postal_code, country = :country, province = :province";

        // Add password to the query if changed
        if (!empty($password)) {
            $sql .= ", password = :password";
        }

        $sql .= " WHERE user_id = :userID";

        $stmt = $conn->prepare($sql);

        // Bind values
        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone_number", $phone_number);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":city", $city);
        $stmt->bindParam(":postal_code", $postal_code);
        $stmt->bindParam(":country", $country);
        $stmt->bindParam(":province", $province);
        $stmt->bindParam(":userID", $userID);

        // Bind password if it's changed
        if (!empty($password)) {
            $stmt->bindParam(":password", $password);
        }

        // Execute the query
        if ($stmt->execute()) {
            // Success message
            echo "Profile updated successfully!";
        } else {
            echo "Error updating profile.";
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "User not logged in.";
}
