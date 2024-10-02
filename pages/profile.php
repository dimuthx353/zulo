<?php
session_start();
include_once "../inc/db.php";

$wishlistProductDetails = []; // Initialize to avoid undefined errors

if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $fname = $row['first_name'];
        $userID = $row['user_id'];

        // Now fetch wishlist items for this user
        $wishlistSql = "SELECT product_id FROM wishlist WHERE user_id = :userID";
        $wishlistStmt = $conn->prepare($wishlistSql);
        $wishlistStmt->bindParam(":userID", $userID);  // Bind userID parameter
        $wishlistStmt->execute();

        // Check if the user has any wishlist items
        if ($wishlistStmt->rowCount() > 0) {
            // Fetch all wishlist items
            $wishlistItems = $wishlistStmt->fetchAll(PDO::FETCH_ASSOC);

            // Prepare an array to store product details
            foreach ($wishlistItems as $wishlistItem) {
                $productID = $wishlistItem['product_id'];

                // Fetch the product details from the products table
                $productSql = "SELECT * FROM products WHERE product_id = :productID";
                $productStmt = $conn->prepare($productSql);
                $productStmt->bindParam(":productID", $productID);
                $productStmt->execute();

                // Fetch the product details and store them in the array
                if ($productStmt->rowCount() > 0) {
                    $product = $productStmt->fetch(PDO::FETCH_ASSOC);
                    $wishlistProductDetails[] = $product;  // Store product details
                }
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/profile.min.css">

    <style>
        img {
            width: 100%;
            object-fit: cover;
            height: 250px;
            object-position: top center;
        }
    </style>
</head>

<body class="bg-dark text-white">
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-dark">
            <header>
                <a href="#" class="navbar-brand">Welcome, <?php echo htmlspecialchars($fname) . htmlspecialchars($userID); ?></a>
            </header>
            <img src="../assets/img/m01.jpeg" alt="" class="img-profile">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showSection('account-main')">
                        <i class="zmdi zmdi-view-dashboard"></i> Account Main
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showSection('new-orders')">
                        <i class="zmdi zmdi-link"></i> New Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showSection('order-history')">
                        <i class="zmdi zmdi-widgets"></i> Order History
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showSection('wishlist')">
                        <i class="zmdi zmdi-calendar"></i> My Wishlist
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showSection('profile-settings')">
                        <i class="zmdi zmdi-info-outline"></i> Profile Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="zmdi zmdi-settings"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div id="content">
            <div class="container-fluid">
                <div id="wishlist" class="content-section">
                    <h1>Your Wishlist Items</h1>
                    <?php if (!empty($wishlistProductDetails)): ?>
                        <ul class="list-group">
                            <?php foreach ($wishlistProductDetails as $product):
                                $productPrice = $product["price"];
                                $imgName = $product["image_url"];
                                $productTitle = $product["product_name"];
                                $imgPath = "../assets/img/$imgName";
                                $productId = $product["product_id"];

                                include_once "../partials/productCard.php";  // Include the product card layout
                            ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>No items in your wishlist.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>