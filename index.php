<?php
include_once "./inc/db.php";

$sql = "SELECT product_name, description, price, stock_quantity, image_url, sku 
        FROM products 
        WHERE category_id = 2 
        ORDER BY product_id DESC 
        LIMIT 8;";
$stmt = $conn->prepare($sql);
$stmt->execute();


$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- title  -->
  <title>Zulo - Your Style, Your Way</title>

  <!-- bootstrap cdn  -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <!-- font awesome cdn  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" />

  <!-- external css files  -->
  <link rel="stylesheet" href="./assets//css/reset.min.css" />
  <link rel="stylesheet" href="./assets//css/darkmode.min.css" />
  <link rel="stylesheet" href="./assets//css/nav.min.css" />

  <link rel="stylesheet" href="./assets//css/index.min.css" />
</head>

<body class="bg-white">


  <div class="container-fluid m-0 p-0 full-body d-flex flex-column">
    <!-- navigation  -->
    <header>
      <?php
      include_once "./partials/nav.php"
      ?>
    </header>
    <div class="container-fluid new-fashion p-0 m-0 flex-grow-1">
      <div class="d-flex flex-wrap">
        <div class="col-6 bg-danger div-one">
          <h1 class="display-1 text-white">
            <span>Z</span><span>U</span><span>L</span><span>O</span>
            <span>F</span>
          </h1>
          <div class="buy-btn">
            <button type="button" class="btn btn-outline-warning text-white">
              Shop Now
            </button>
          </div>
        </div>

        <div class="col-6 bg-warning div-two">
          <h1 class="display-1 text-white">
            <span>A</span><span>S</span><span>H</span><span>I</span><span>O</span><span>N</span>
          </h1>
          <div class="buy-btn">
            <button type="button" class="btn btn-outline-danger text-dark">
              Shop Now
            </button>
          </div>
        </div>
        <img
          src="./assets/img/low-quality/girl.png"
          data-sizes="auto"
          data-src="./assets/img/girl.png"
          class="lazyload blur-up girl-png"
          alt="Example Image 3" />
      </div>

      <!-- login section  -->
      <div class="container bg-white login" id="login">
        <!-- SIGN IN SECTION  -->
        <div class="container-fluid d-block py-5 px-3" id="sign-in">
          <h4>My Account</h4>
          <form action="./inc/handlers/login_handler.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <br />
              <input
                type="email"
                class="form-control border border-1 border-dark"
                id="exampleInputEmail1"
                name="email" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input
                type="password"
                class="form-control border border-1 border-dark"
                id="exampleInputPassword1"
                name="pwd" />
            </div>
            <small class="d-block mb-2 text-danger"><a href="">forgot your password ?</a></small>
            <button
              type="submit"
              name="submit"
              class="btn btn-outline-dark display-block w-100">

              Login
            </button>
          </form>
          <div class="mt-5">
            <hr class="" />
            <h4 class="mt-3">SIGN UP</h4>
            <button
              class="btn btn-outline-dark display-block w-100 mt-3"
              onclick="showSignup()">
              SIGN UP NOW
            </button>
          </div>
        </div>

        <!-- SIGN UP SECTION  -->
        <div class="container-fluid d-block d-none py-5 px-3" id="sign-up">
          <h4>SIGN UP</h4>
          <form action="./inc/handlers/register_handler.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">FIRST NAME *</label>
              <input
                type="text"
                class="form-control border border-1 border-dark"
                name="fname" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">LAST NAME *</label>
              <input
                type="text"
                class="form-control border border-1 border-dark"
                name="lname" />

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">EMAIL *</label>
              <input
                type="email"
                class="form-control border border-1 border-dark"
                name="email" />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">PASSWORD *</label>
              <input
                type="password"
                class="form-control border border-1 border-dark"
                name="pwd" />
            </div>

            <button type="submit" name="submit" class="btn btn-outline-dark display-block w-100">
              SIGN UP NOW!
            </button>
          </form>
          <div class="mt-5">
            <hr class="" />
            <button
              class="btn btn-outline-dark display-block w-100 mt-3"
              onclick="showLogin()">
              RETURN TO STORE
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="trusted-brands">
    <div class="container-fluid">
      <div class="brand-container">
        <img
          src="https://img.logo.dev/Prada.com?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 1"
          class="brand-logo" />
        <img
          src="https://img.logo.dev/adidas.com?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 2"
          class="brand-logo" />
        <img
          src="https://img.logo.dev/next.co.uk?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 3"
          class="brand-logo" />
        <img
          src="https://img.logo.dev/converse.com?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 4"
          class="brand-logo" />
        <img
          src="https://img.logo.dev/dior.com?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 5"
          class="brand-logo" />
        <img
          src="https://img.logo.dev/sablecard.com?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 6"
          class="brand-logo" />

        <img
          src="https://img.logo.dev/carbon38.com?token=pk_CxZ_18mkTfacSXZv3gB7og"
          alt="Brand 2"
          class="brand-logo" />
      </div>
    </div>
  </section>

  <!-- new collection start  -->
  <div class="bg-white container-fluid new-collections">
    <h1 class="display-3 text-center main-title text-black">
      New Collections
    </h1>
    <section class="py-5">
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide col-3 row"
        data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./assets/img/low-quality/slidew01.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidew01.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/img/low-quality/slidew02.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidew02.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/img/low-quality/slidew03.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidew03.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide col-4 row"
        data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./assets/img/low-quality/slidem01.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidem01.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/img/low-quality/slidem02.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidem02.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/img/low-quality/slidem03.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidem03.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide col-3 row"
        data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./assets/img/low-quality/slidek01.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidek01.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />

            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/img/low-quality/slidek02.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidek02.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="./assets/img/low-quality/slidek03.jpg"
              data-sizes="auto"
              data-src="./assets/img/slidek03.jpg"
              class="lazyload blur-up d-block w-100"
              alt="Example Image 3" />
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- category start  -->
  <div class="container-fluid category">
    <h1 class="display-3 text-center main-title text-black">Category</h1>
    <!-- Category Section -->
    <h3 class="text-center text-capitalize mb-4">
      <span
        class="mx-2 text-decoration-none text-danger cursor-pointer"
        onclick="changeSection('men' , event)"
        id="menatag">MENS
      </span>
      <span
        class="mx-2 text-decoration-none cursor-pointer"
        onclick="changeSection('women',
          event)"
        id="womenatag">WOMEN
      </span>
    </h3>

    <div class="container d-none" id="women">
      <h3 class="d-flex justify-content-between mb-5">
        for women
        <button type="button" class="btn btn-outline-primary">
          <a href="./pages/women.php" class="text-decoration-none">See All</a>
        </button>
      </h3>

      <div class="d-flex flex-wrap gap-4">
        <?php


        foreach ($products as $product) {

          $productPrice = $product["price"];
          $imgName = $product["image_url"];
          $productTitle = $product["product_name"];
          $imgPath = "./assets/img/$imgName";

          include "./partials/productCard.php";
        }

        ?>

      </div>
    </div>

    <div class="container" id="men">
      <h3 class="d-flex justify-content-between mb-5">
        for men
        <button type="button" class="btn btn-outline-primary">See all</button>
      </h3>

      <div class="d-flex flex-wrap gap-4">
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m01.jpeg"
              data-sizes="auto"
              data-src="./assets/img/m01.jpeg"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>
              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m02.jpg"
              data-sizes="auto"
              data-src="./assets/img/m02.jpg"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m03.jpeg"
              data-sizes="auto"
              data-src="./assets/img/m03.jpeg"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m04.webp"
              data-sizes="auto"
              data-src="./assets/img/m04.webp"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m05.webp"
              data-sizes="auto"
              data-src="./assets/img/m05.webp"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m06.webp"
              data-sizes="auto"
              data-src="./assets/img/m06.webp"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m01.jpeg"
              data-sizes="auto"
              data-src="./assets/img/m01.jpeg"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div>
            <img
              src="./assets/img/low-quality/m02.jpg"
              data-sizes="auto"
              data-src="./assets/img/m02.jpg"
              class="lazyload blur-up card-img-top"
              alt="Example Image 3" />
          </div>

          <div class="card-body">
            <!-- Product Title -->
            <h6 class="card-title text-center fw-bold text-uppercase mb-4">
              Long Sleeve Formal Blazer With Pockets - Brown
            </h6>

            <!-- Price and Icons Section -->
            <div class="bg-light p-3 rounded shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5 fw-bold text-danger">Rs 7,990.00</span>
                <div class="d-flex gap-3 align-items-center">
                  <i class="bi bi-bag fs-5 text-dark"></i>
                  <i class="bi bi-heart fs-5 text-danger"></i>
                </div>
              </div>

              <!-- Buy Now Buttons -->
              <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-danger">Add to Cart</button>
                <button class="btn btn-danger text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer start  -->
  <footer>
    <?php
    include_once "./partials/footer.php"
    ?>
  </footer>


  <!-- lazysizes cdn -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"
    integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>




  <!-- bootstrap js cdn  -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- external js  -->
  <script src="./assets/js/index.js"></script>

</body>

</html>