<?php

include_once '../db.php';
include_once '../function.php';

if (isset($_POST['submit'])) {
    // removing white spaces and assign values to the variables
    $fName = trim($_POST['fname']);
    $lName = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $pwd = trim($_POST['password'])
    $phoneNum = trim($_POST['phoneNum']);
    $streetAddress = trim($_POST['streetAddress']);
    $city = trim($_POST['city'])
    $province = trim($_POST['province']);
    $zipCode = trim($_POST['zipCode']);



}