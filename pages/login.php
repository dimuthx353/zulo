<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/addCategories.min.css">
    <link rel="stylesheet" href="../assets/css/women.min.css">
    <link rel="stylesheet" href="../assets/css/reset.min.css">
    <link rel="stylesheet" href="../assets/css/login.min.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" />
</head>

<body>
    <div class="text-white login rounded-2">
        <form class="h-75 d-flex flex-column justify-content-around">
            <div class="mb-3">
                <input type="email" placeholder="Email" class="rounded-5 form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="password" placeholder="Password" class="rounded-5 form-control" id="exampleInputPassword1">
            </div>
            <!-- Forgot Password Link -->
            <div class="text-end mb-3">
                <a href="#" class="text-light">Forgot Password?</a>
            </div>
            <button type="submit" class="rounded-5 btn btn-primary">Login</button>
        </form>
        <!-- Sign Up Link -->
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="#" class="text-light">Sign Up</a></p>
        </div>
    </div>
</body>

</html>