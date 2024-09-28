<?php

include_once '../db.php';
include_once '../function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $emptyInput = emptyInputSignup($fName, $lName, $email, $pwd);
    $invalidEmail = invalidEmail($email);
    $emailExists = emailExists($conn, $email);

    if ($emptyInput !== false || $invalidEmail !== false || $emailExists !== false) {
        echo "something went wrong";
        exit();
    } else {
        createUser($conn, $fName, $lName, $email, $pwd);
        exit();
    }
}
