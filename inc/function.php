<?php

function emptyInputSignup($fName, $lName, $email, $pwd)
{
    $result = null;

    if (empty($fName) || empty($lName) || empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email)
{
    $result = null;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = :email;";

    $stmt = $conn->prepare($sql); // Use PDO's prepare method

    if (!$stmt) {
        // Handle the error, for example:
        header('Location: ../../signup/index.php?error=stmtfailed');
        exit();
    }

    $stmt->bindParam(':email', $email); // Use bindParam for PDO
    $stmt->execute();

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return $row['id']; // Return the user ID if the email exists
    } else {
        return false; // Email does not exist
    }
}

function createUser($conn, $fName, $lName, $email, $pwd)
{
    $sql = "INSERT INTO users (fName, lName, email, pwd) VALUES (:fName, :lName, :email, :pwd);";

    $stmt = $conn->prepare($sql); // Prepare the SQL statement using PDO
    if (!$stmt) {
        header('Location: ../../signup/index.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); // Hash the password

    // Bind the parameters using PDO's bindParam or bindValue
    $stmt->bindParam(':fName', $fName);
    $stmt->bindParam(':lName', $lName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pwd', $hashedPwd);

    // Execute the statement
    $stmt->execute();


    exit();
}


function loginUser($conn, $email, $pwd)
{
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql); // Use PDO's prepare method

    if (!$stmt) {
        header("Location: ../../signin/index.php?error=sqlerror");
        exit();
    }

    // Bind the email parameter using PDO
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Fetch the result as an associative array
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists
    if ($row) {
        $pwdHashed = $row['pwd'];

        // Verify the password
        if (password_verify($pwd, $pwdHashed)) {
            // Start session and store user data
            session_start();
            $_SESSION["email"] = $row["email"];
            $_SESSION["status"] = $row["status"];

            // Redirect based on user status
            if ($row["status"] == 1) {
                header("Location: ../../admin/index.php?admin=true");
                exit();
            } else {
                header("Location: ../../dashboard/index.php?admin=false");
                exit();
            }
        } else {
            // Invalid password
            header("Location: ../../signin/index.php?error=wrongpassword");
            exit();
        }
    } else {
        // No user found
        header("Location: ../../signin/index.php?error=nouser");
        exit();
    }
}
