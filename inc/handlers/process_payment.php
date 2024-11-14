<?php
session_start();
include_once "../db.php";

$userID = $_SESSION["user_id"];

// Ensure user is authenticated
if (!isset($userID)) {
    die('User not authenticated.');
}