<?php

$heartClass = "bi bi-heart";


if (isset($_SESSION["user_id"])) {
    // Assuming you already have the user_id and product_id
    $user_id = $_SESSION['user_id']; // Example: get from session
    $product_id = $productId; // Example: get from URL or request

    // SQL Query
    $sql = "SELECT * FROM wishlist WHERE user_id = :user_id AND product_id = :product_id";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);

    // Execute the statement
    $stmt->execute();

    // Check if the product is in the wishlist
    if ($stmt->rowCount() > 0) {
        // Product is in wishlist, show filled heart
        $heartClass = "bi bi-heart-fill";
    } else {
        // Product is not in wishlist, show empty heart
        $heartClass = "bi bi-heart";
    }
} else {
    $product_id = 0;
}
?>

<div class='card shadow-sm' style='width: 18rem; margin: 0 auto'>
    <a href='../../zulo/partials/productDetails.php?product_id=' class="text-decoration-none  d-block">
        <div>
            <img
                src=""
                data-sizes="auto"
                data-src=""
                class="lazyload blur-up d-block w-100"
                alt="Example Image 3" />
        </div>
        <div class='card-body'>
            <!-- Product Title -->
            <h6 class='card-title text-center fw-bold text-uppercase mb-4'>
               
            </h6>
    </a>
    <!-- Price and Icons Section -->
    <div class='bg-light p-3 rounded shadow-sm'>
        <div
            class='d-flex justify-content-between align-items-center mb-3'>
            <span class='h5 fw-bold text-danger'> Rs. 
            </span>
            <div class='d-flex gap-3 align-items-center'>
                <i class='bi bi-bag fs-5 text-dark'></i>
             


            </div>
        </div>
        <!-- Buy Now Buttons -->
        <div class='d-flex justify-content-center gap-2'>
            <button class='btn btn-outline-danger' onclick="addToCart()">Add to Cart</button>
            <button class='btn btn-danger text-white'>Buy Now</button>
        </div>
    </div>
</div>

</div>