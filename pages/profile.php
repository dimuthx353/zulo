<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/profile.min.css">
</head>

<body class="bg-dark text-white">
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-dark">
            <header>
                <a href="#" class="navbar-brand">My App</a>
            </header>
            <img src="../assets/img/m01.jpeg" alt="" class="img-profile">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-view-dashboard"></i> Account Main
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-link"></i> New Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-widgets"></i> Order History
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-calendar"></i> My Wishlist
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-info-outline"></i> Profile Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="zmdi zmdi-settings"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <ul class="navbar-nav ms-auto flex-row">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="zmdi zmdi-notifications text-danger"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Test User</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>
                    Make sure to keep all page content within the
                    <code>#content</code>.
                </p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>