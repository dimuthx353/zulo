<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login and Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                    <form class="h-75 d-flex flex-column justify-content-around">
                        <div class="mb-3">
                            <input type="email" placeholder="Email" class="rounded-5 form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Password" class="rounded-5 form-control" id="exampleInputPassword1">
                        </div>
                        <div class="text-end mb-3">
                            <a href="#" class="text-light">Forgot Password?</a>
                        </div>
                        <button type="submit" class="rounded-5 btn btn-primary">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="#" class="text-light">Sign Up</a></p>
                    </div>
                </div>
            </div>

            <!-- Register Form -->
            <div class="tab-pane fade p-0" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <div class="text-white login rounded-2  h-100 d-flex justify-content-center flex-column">
                    <form class="d-flex flex-column justify-content-around  ">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" placeholder="First Name" class="rounded-5 form-control">
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" placeholder="Last Name" class="rounded-5 form-control">
                            </div>
                        </div>

                        <div class="mb-2">
                            <input type="email" placeholder="Email" class="rounded-5 form-control">
                        </div>

                        <div class="mb-2">
                            <input type="password" placeholder="Password" class="rounded-5 form-control">
                        </div>

                        <div class="mb-2">
                            <input type="text" placeholder="Phone Number" class="rounded-5 form-control">
                        </div>

                        <!-- Address Fields -->
                        <div class="mb-2">
                            <input type="text" placeholder="Street Address" class="rounded-5 form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <input type="text" placeholder="City" class="rounded-5 form-control">
                            </div>
                            <div class="col-md-4 mb-2">
                                <input type="text" placeholder="State" class="rounded-5 form-control">
                            </div>
                            <div class="col-md-4 mb-2">
                                <input type="text" placeholder="Zip Code" class="rounded-5 form-control">
                            </div>
                        </div>

                        <button type="submit" class="rounded-5 btn btn-primary">Register</button>
                    </form>
                    <div class="text-center mt-1">
                        <p>Already have an account? <a href="#" class="text-light">Login</a></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

</body>

</html>