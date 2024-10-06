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

function createUser($conn, $fName, $lName, $email, $pwd, $phoneNum, $streetAddress, $city, $province, $zipCode)
{
    // Corrected SQL statement to include all fields
    $sql = "INSERT INTO users (first_name, last_name, email, password, phone_number, address, city, postal_code, province) 
            VALUES (:fName, :lName, :email, :pwd, :phoneNum, :streetAddress, :city, :zipCode, :province);";

    $stmt = $conn->prepare($sql); // Prepare the SQL statement using PDO
    if (!$stmt) {
        header('Location: ../../signup/index.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); // Hash the password

    // Bind all parameters using PDO's bindParam or bindValue
    $stmt->bindParam(':fName', $fName);
    $stmt->bindParam(':lName', $lName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pwd', $hashedPwd);
    $stmt->bindParam(':phoneNum', $phoneNum);
    $stmt->bindParam(':streetAddress', $streetAddress);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':zipCode', $zipCode);
    $stmt->bindParam(':province', $province);

    // Execute the statement and handle errors
    if ($stmt->execute()) {
        header('Location:../../../../zulo/'); // Redirect on success
    } else {
        header('Location: ../../signup/index.php?error=stmtfailed'); // Redirect on failure
    }

    exit();
}


function loginUser($conn, $email, $pwd)
{
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header("Location:../../../../zulo/pages/login.php?error=stmt");
        exit();
    }

    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $pwdHashed = $row['password'];

        // Verify the password
        if (password_verify($pwd, $pwdHashed)) {


            if ($row["account_status"] == 0) {
                header("Location:../../../../zulo/pages/suspend.php");
                exit();
            }

            session_start();
            $_SESSION["email"] = $row["email"];
            $_SESSION["user_id"] = $row["user_id"];

            if ($row["roll"] === "admin") {
                header("Location:../../../../zulo/pages/admin/");
            } else {
                header("Location:../../../../zulo/index.php");
            }
        } else {
            header("Location:../../../../zulo/pages/login.php?error=pwdNotMatching");
            exit();
        }
    } else {
        header("Location:../../../../zulo/pages/login.php?error=error");
        exit();
    }
}
