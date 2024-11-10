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
       <title>Mens - Zulo</title>
       <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">

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
                   <p>
                   <h1>Men</h1>
                   </p>
                   <img src="../assets/img/menpageslide03.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                   <p>
                   <h1>Men</h1>
                   </p>
                   <img src="../assets/img/menpageslide02.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                   <p>
                   <h1>Men</h1>
                   </p>
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
           <div class="col-9 d-flex flex-wrap gap-4 border-red" id="men">
               <h1 class="text-center w-100">Men</h1>

               <?php
                foreach ($products as $product) {

                    $productPrice = $product["price"];
                    $imgName = $product["image_url"];
                    $productTitle = $product["product_name"];
                    $imgPathOrg = "../assets/img/$imgName";
                    $imgPathLow = "../assets/img/low-quality/$imgName";
                    $productId = $product["product_id"];

                    include "../partials/productCard.php";
                }
                ?>
           </div>
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

       <!-- Lazysizes  -->
       <script src="./node_modules/lazysizes/lazysizes.min.js" async=""></script>

       <!-- Lazysizes CDN -->
       <script
           src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"
           integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ=="
           crossorigin="anonymous"
           referrerpolicy="no-referrer"></script>


       <!-- Ajax For Handling Wishlist and add to cart function  -->
       <?php
        if ($_SESSION["user_id"]) { ?>
           <script>
               function addToWishlist(event) {
                   if (event.target.classList.contains('bi-heart-fill')) {
                       const xhr = new XMLHttpRequest();
                       xhr.open(
                           'GET',
                           `../../zulo/inc/handlers/wishlist_handler.php?cart=false&product_id=${event.target.dataset.product_id}`,
                           true
                       );
                       xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                       xhr.onload = function() {
                           if (this.status === 200) {
                               // console.log(this.responseText);
                           }
                       };

                       xhr.send();
                   } else if (event.target.classList.contains('bi-heart')) {
                       const xhr = new XMLHttpRequest();
                       xhr.open(
                           'GET',
                           `../../zulo/inc/handlers/wishlist_handler.php?cart=true&product_id=${event.target.dataset.product_id}`,
                           true
                       );
                       xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                       xhr.onload = function() {
                           if (this.status === 200) {}
                       };

                       xhr.send();
                   }

                   event.target.classList.toggle('bi-heart');
                   event.target.classList.toggle('bi-heart-fill');
               }


               function addToCart(productId) {
                   console.log(productId);
                   const xhr = new XMLHttpRequest();
                   xhr.open(
                       'GET',
                       `../../zulo/inc/handlers/cart_handler.php?product_id=${productId}`,
                       true
                   );
                   xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                   xhr.onload = function() {
                       if (this.status === 200) {
                           //    console.log(this.responseText);
                       }
                   };
                   xhr.send();
               }
           </script>
       <?php }
        ?>

       <script src="../assets/js/search.js"></script>


   </body>

   </html>