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
  <link rel="stylesheet" href="./css/reset.min.css" />
  <link rel="stylesheet" href="./css/darkmode.min.css" />
  <link rel="stylesheet" href="./css/nav.min.css" />

  <link rel="stylesheet" href="./css/index.min.css" />
</head>

<body class="bg-white">
  <!-- navigation  -->
  <?php
  include_once "./partials/nav.php"
  ?>

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
        <button type="button" class="btn btn-outline-primary">See all</button>
      </h3>

      <div class="d-flex flex-wrap gap-4">
        <div class="card shadow-sm" style="width: 18rem; margin: 0 auto">
          <div class="">
            <img
              src="./assets/img/low-quality/w01.webp"
              data-sizes="auto"
              data-src="./assets/img/w01.webp"
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
              src="./assets/img/low-quality/w02.webp"
              data-sizes="auto"
              data-src="./assets/img/w02.webp"
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
              src="./assets/img/low-quality/w03.webp"
              data-sizes="auto"
              data-src="./assets/img/w03.webp"
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
              src="./assets/img/low-quality/w04.webp"
              data-sizes="auto"
              data-src="./assets/img/w04.webp"
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
              src="./assets/img/low-quality/w05.webp"
              data-sizes="auto"
              data-src="./assets/img/w05.webp"
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
              src="./assets/img/low-quality/w06.webp"
              data-sizes="auto"
              data-src="./assets/img/w06.webp"
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
              src="./assets/img/low-quality/w07.webp"
              data-sizes="auto"
              data-src="./assets/img/w07.webp"
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
              src="./assets/img/low-quality/w08.webp"
              data-sizes="auto"
              data-src="./assets/img/w08.webp"
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
  <?php
  include_once "./partials/footer.php"
  ?>

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
  <script src="./js/index.js"></script>
</body>

</html>