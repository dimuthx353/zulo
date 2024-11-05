<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register - Zulo</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/logo.png">

    <!-- Bootstrap CDN  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- External CSS  -->
    <link rel="stylesheet" href="../assets/css/addCategories.min.css">
    <link rel="stylesheet" href="../assets/css/women.min.css">
    <link rel="stylesheet" href="../assets/css/reset.min.css">
    <link rel="stylesheet" href="../assets/css/login.min.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" />
</head>
<body>

<div class="container controls">
        <ul class="nav nav-pills nav-justified mb-3 w-100 px-5 py-4" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-bs-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-bs-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
    </div>
    <div class="container container-form rounded-3 col-4 d-flex justify-content-center align-items-center flex-column">
     <div class="tab-content">
        <!-- Login Form -->
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <div class="text-white login rounded-2">
                    <form class="h-75 d-flex flex-column justify-content-around" >
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="Email" class="rounded-5 form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password" class="rounded-5 form-control" id="exampleInputPassword1">
                        </div>
                        <div class="text-end mb-3">
                            <a href="#" class="text-light">Forgot Password?</a>
                        </div>

                        <button type="submit" name="submit" class="rounded-5 btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
    
</body>
</html>