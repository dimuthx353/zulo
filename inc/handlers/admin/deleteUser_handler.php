<?php
include_once "../../db.php"; // Assuming db.php sets up a PDO connection


if (isset($_GET["id"])) {
    $userId = $_GET["id"];
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$userId]);

    header("Location: ../../../../../zulo/pages/admin/index.php?removed");
} else {
    echo json_encode(["success" => false, "error" => "Missing product ID"]);
}
