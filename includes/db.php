<?php
$servername = "localhost:3307";
$username = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=zulo", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
