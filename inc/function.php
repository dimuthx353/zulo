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