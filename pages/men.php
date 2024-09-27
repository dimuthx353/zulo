   <?php
    include_once "../inc/db.php";

    $sql = "SELECT product_name, description, price, stock_quantity, image_url, sku FROM products WHERE category_id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all products as an associative array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);


    ?>

   <!doctype html>
   <html lang="en">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Mens</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <link rel="stylesheet" href="../assets/css/addCategories.min.css">
       <link rel="stylesheet" href="../assets/css/women.min.css">
       <link rel="stylesheet" href="../assets/css/reset.min.css">


       <!-- font awesome cdn  -->
       <link
           rel="stylesheet"
           href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
           integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
           crossorigin="anonymous" />
   </head>

   <body>
       <h1 class="text-center">Men</h1>
       <div class="d-flex flex-wrap gap-4">



           <?php
            foreach ($products as $product) {

                $productPrice = $product["price"];
                $imgName = $product["image_url"];
                $productTitle = $product["product_name"];
                $imgPath = "../assets/img/$imgName";



                include "../partials/productCard.php";
            }
            ?>
       </div>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>

   </html>