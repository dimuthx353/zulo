<?php
session_start();
include_once "../inc/db.php";
$userID = $_SESSION["user_id"];

if (isset($_GET["product_id"])) {
    $productID = $_GET["product_id"];
    $sql = "SELECT product_name, description, price, stock_quantity, image_url, sku ,product_id
            FROM products 
            WHERE product_id = $productID;";


    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $product = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now - Zulo</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">

     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Font Awesome CDN  -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" />

<!-- External CSS  -->
<!-- <link rel="stylesheet" href="../assets/css/cart.min.css"> -->
<link rel="stylesheet" href="../assets/css/reset.min.css">
<link rel="stylesheet" href="../assets/css/nav.min.css">
<link rel="stylesheet" href="../assets/css/footer.min.css">
<link rel="stylesheet" href="../assets/css/index.min.css">
</head>

<body>
     <?php
    include_once "../partials/nav.php"
    ?>

<div class="container d-flex ">
        <?php

        $productPrice = $product["price"];
        $imgName = $product["image_url"];
        $productTitle = $product["product_name"];
        $imgPathOrg = "../assets/img/$imgName";
        $imgPathLow = "../assets/img/low-quality/$imgName";
        $productId = $product["product_id"];
        ?>

        <div class="col-6">
            <div class="mt-5 d-block">
                <img src="<?php echo $imgPathOrg ?>" alt="" style="width: 400px;height:450px;object-fit:cover;object-position:center top">
                <h6 class="mt-3 display-5 w-75"><?php echo $productTitle ?></h6>
                <h5 class="display-4 text-primary"><?php echo $productPrice ?>LKR</h5>
            </div>


        </div>
    
</body>
</html>