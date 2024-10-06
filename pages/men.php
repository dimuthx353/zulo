   <?php
    session_start();
    include_once "../inc/db.php";

    $sql = "SELECT product_id,product_name, description, price, stock_quantity, image_url, sku FROM products WHERE category_id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);


    ?>

   <!doctype html>
   <html lang="en">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Mens</title>

       <!-- Bootstrap CDN -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       <!-- External CSS  -->
       <link rel="stylesheet" href="../assets/css/addCategories.min.css">
       <link rel="stylesheet" href="../assets/css/women.min.css">
       <link rel="stylesheet" href="../assets/css/reset.min.css">
       <link rel="stylesheet" href="../assets/css/nav.min.css">
       <link rel="stylesheet" href="./assets/css/footer.min.css">

       <!-- Font Awesome CDN  -->
       <link
           rel="stylesheet"
           href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
           integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
           crossorigin="anonymous" />
   </head>

   <body>

       <div class="container-fluid m-0 p-0 full-body d-flex flex-column">
           <!-- Navigation  -->
           <header>
               <?php
                include_once "../partials/nav.php";
                ?>
           </header>
       </div>

       <div id="carouselExampleIndicators" class="carousel slide mb-5 carousel-slider">
           <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>

           <div class="carousel-inner h-100">
               <div class="carousel-item active">
                   <img src="../assets/img/menpageslide03.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                   <img src="../assets/img/menpageslide02.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                   <img src="../assets/img/menpageslide01.jpg" class="d-block w-100" alt="...">
               </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
       </div>

       <div class="container d-flex product-section">
           <div class="col-3 border-red">
               <h1>filer options</h1>
           </div>
           <div class="col-9 d-flex flex-wrap gap-4 border-red">
               <h1 class="text-center w-100">Men</h1>
               <?php
                foreach ($products as $product) {

                    $productPrice = $product["price"];
                    $imgName = $product["image_url"];
                    $productTitle = $product["product_name"];
                    $imgPath = "../assets/img/$imgName";
                    $productId = $product["product_id"];

                    include "../partials/productCard.php";
                }
                ?>
           </div>
       </div>

       <!-- Footer Start  -->
       <footer>
           <?php
            $imgPathForFooter = "../assets/img/";

            include_once "../partials/footer.php"
            ?>
       </footer>

       <!-- External JS  -->
       <script src="../assets/js/index.js"></script>

       <!-- Bootstrap CDN -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>

   </html>