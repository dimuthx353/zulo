<?php
session_start();
include_once "../inc/db.php";
$userID = $_SESSION["user_id"];
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Zulo</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- External CSS  -->
    <link rel="stylesheet" href="../assets/css/cart.min.css">
    <link rel="stylesheet" href="../assets/css/reset.min.css">
</head>

<body>
<section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card shopping-cart" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 px-5 py-4">

                                    <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
                                    <?php


                                    if (!isset($userID)) {
                                        die('User not authenticated.');
                                    }

                                    try {
                                        // SQL query to fetch cart items and product details using PDO
                                        $sql = "
                                                    SELECT c.product_id, c.quantity, c.added_at, p.product_name, p.price, p.image_url
                                                    FROM cart c
                                                    JOIN products p ON c.product_id = p.product_id
                                                    WHERE c.user_id = :user_id
                                                ";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bindParam(':user_id', $userID, PDO::PARAM_INT); // Bind userID from session
                                        $stmt->execute();
                                         $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results
                                        
                                        if (count($cartItems) > 0) {



                                            foreach ($cartItems as $item) {

                                                $itemTotal = $item['price'] * $item['quantity'];
                                                $total += $itemTotal;
                                                // Template to display cart items
                                                echo '
                                                    <div class="d-flex align-items-center mb-5">
                                                        <div class="flex-shrink-0">
                                                            <img src="../assets/img/' . htmlspecialchars($item['image_url']) . '" class="img-fluid" style="width: 150px;" alt="Product image">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <a href="#!" class="float-end"><i class="fas fa-times"></i></a>
                                                            <h5 class="text-primary">' . htmlspecialchars($item['product_name']) . '</h5>
                                                            <h6 style="color: #9e9e9e;">Added on: ' . htmlspecialchars($item['added_at']) . '</h6>
                                                            <div class="d-flex align-items-center">
                                                                <p class="fw-bold mb-0 me-5 pe-3">Rs.' .  number_format($item['price'], 2) . '</p>
                                                                <div class="def-number-input number-input safari_only">
                                                                    <button data-mdb-button-init onclick="this.parentNode.querySelector(\'input[type=number]\').stepDown()" class="minus"></button>
                                                                    <input class="quantity fw-bold bg-body-tertiary text-body" min="0" name="quantity" value="' . htmlspecialchars($item['quantity']) . '" type="number">
                                                                    <button data-mdb-button-init onclick="this.parentNode.querySelector(\'input[type=number]\').stepUp()" class="plus"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            }
                                        } else {
                                            echo '<p>Your cart is empty.</p>';
                                        }
                                    } catch (PDOException $e) {
                                        // Handle errors
                                        echo "Error: " . $e->getMessage();
                                    }
                                    ?>

                                    
                                     <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                                    <div class="d-flex justify-content-between px-x">
                                        <p class="fw-bold">Discount:</p>
                                        <p class="fw-bold"></p>
                                    </div>
                                    <div class="d-flex justify-content-between p-2 mb-2 bg-primary">
                                        <h5 class="fw-bold mb-0">Total:</h5>
                                        <h5 class="fw-bold mb-0">Rs.
                                            <?php
                                            echo $total;
                                            ?>
                                        </h5>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>