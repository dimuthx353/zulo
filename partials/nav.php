<?php
session_start();

$user = false;

if (isset($_SESSION["email"])) {
    $user = true;
    $email = $_SESSION["email"];
}
?>


<div
    class="bg-secondary text-white d-flex justify-content-center align-content-center">
    <div class="container">
        <div
            id="carouselContent"
            class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active text-center p-2">
                    <small class="text-white">
                        DELIVERY UPDATE - Kindly expect delivery times of 4-5 working
                        days
                    </small>
                </div>
                <div class="carousel-item text-center p-2">
                    <small>
                        <span class="text-capitalize">Non-exchangeable</span> - items
                        purchased on discount are not exchangeable
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 navigation">
    <nav
        class="navbar navbar-expand-lg bg-body-light shadow p-0 sticky-top navbar-inverse">
        <div class="container-fluid p-0 d-flex">
            <div class="col-3 row">
                <div>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li
                                class="nav-item d-flex justify-content-center align-items-center position-relative">
                                <div
                                    onclick="searchToggle()"
                                    class="h-100 d-flex justify-content-center search-btn">
                                    <button
                                        class="btn bg-white"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Search"
                                        style="width: 50px">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                                <input
                                    type="search"
                                    class="p-2 text-black search-bar bg-light"
                                    id="search-bar"
                                    placeholder="Search..." />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex align-items-center">
                <ul
                    class="navbar-nav me-auto mb-2 mb-lg-0 h6 justify-content-end flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button
                                class="btn btn-black dropdown-toggle"
                                type="button"
                                id="dropdownMenuButton2"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Category
                            </button>
                            <ul
                                class="dropdown-menu bg-transparent"
                                aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a class="dropdown-item" href="../../zulo/pages/men.php">Men</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../../zulo/pages/women.php">Women</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class=" ">
                    <a class="navbar-brand w-100" href="#">
                        <span class="display-5 z-text"> &nbsp;Z</span><span class="ulo-text h3">ulo</span>
                    </a>
                </div>
                <ul
                    class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-start h6 flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gift</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sale</a>
                    </li>
                </ul>
            </div>
            <div
                class="col-3 d-flex justify-content-end align-items-center pe-4">
                <div class="d-flex justify-content-end gap-2 ms-2 control-center">
                    <div onclick="activeDarkMode()">
                        <button class="btn btn-outline-dark" id="switch-mode">
                            <i class="bi bi-brightness-high-fill"></i>
                            <i class="bi bi-moon-stars d-none"></i>
                        </button>
                    </div>
                    <div>
                        <a href="">
                            <button
                                class="btn btn-outline-dark cart-btn"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="cart">
                                <i class="bi bi-bag-fill"></i>
                                <span class="cart-items">14</span>
                            </button>
                        </a>
                    </div>
                    <div class="">
                        <a href="<?php echo $loginPage ? $loginPage : '../pages/login.php'; ?>">
                            <button
                                class="btn  <?php echo $user ? "btn-primary text-white" : "btn-outline-dark"; ?>"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="profile">
                                <i class="bi bi-person-circle"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php
if ($user) {
    echo "<div class='bg-white p-2 d-flex justify-content-end align-items-center'>";
    echo "<span>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</span>";
    echo "<a href='../../zulo/inc/handlers/logout_handler.php' class='ms-4'>"; // Adjust the 'href' to your logout URL
    echo "<button
            class='btn btn-danger text-white'
            data-toggle='tooltip'
            data-placement='top'
            title='Log Out'>
            Log Out
          </button>";
    echo "</a>";
    echo "</div>";
}
?>