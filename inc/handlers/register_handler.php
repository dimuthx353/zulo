<?php

include_once '../db.php';
include_once '../function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $phoneNum = $_POST['phoneNum'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $zipCode = $_POST['zipCode'];

    $emptyInput = emptyInputSignup($fName, $lName, $email, $pwd);
    $invalidEmail = invalidEmail($email);
    $emailExists = emailExists($conn, $email);

    if ($emptyInput !== false || $invalidEmail !== false || $emailExists !== false) {
        echo "something went wrong";
        exit();
    } else {
        createUser($conn, $fName, $lName, $email, $pwd, $phoneNum, $streetAddress, $city, $province, $zipCode);
        exit();
    }
}
