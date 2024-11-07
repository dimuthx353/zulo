<?php
function stmtFailed($stmt)
{
    if (!$stmt) {
        header('Location: $_SERVER["PHP_SELF"]?error=stmtFailed');
        exit();
    }
}

function emptyInputSignup($fName, $lName, $email, $pwd, $phoneNum, $streetAddress, $city, $province, $zipCode)
{
    $isEmpty = null;

    if (empty($fName) || empty($lName) || empty($email) || empty($pwd) || empty($phoneNum) || empty($streetAddress) || empty($city) || empty($province) || empty($zipCode)) {
        $isEmpty = true;
    } else {
        $isEmpty = false;
    }

    return $isEmpty;
}

function invalidEmail($email)
{
    $IsInvalid = null;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $IsInvalid = true;
    } else {
        $IsInvalid = false;
    }

    return $IsInvalid;
}

function emailExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = :email;";

    $stmt = $conn->prepare($sql);
    stmtFailed($stmt);
    $stmt->bindParam(':email', $email);
    $stmt->execute()

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return true;
    } else {
        return false;
    }
}