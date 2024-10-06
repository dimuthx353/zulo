<?php
session_start();
include_once "../../inc/db.php";

// Check if the user is logged in and has a valid session
if (isset($_SESSION["user_id"])) {
    $userID = $_SESSION["user_id"];

    // Fetch the user details based on the user_id from the database
    $sql = "SELECT first_name, last_name, email, password, phone_number, address, city, postal_code, country, created_at, province, account_status 
            FROM users WHERE user_id = :userID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":userID", $userID);
    $stmt->execute();

    // If user details are found, fetch them
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "User not logged in.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRofile - Zulo</title>

    <!-- Bootstrap CDN  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" />

    <!-- External CSS  -->
    <link rel="stylesheet" href="../../assets/css/profile.css">
    <link rel="stylesheet" href="../../assets/css/footer.min.css">
    <link rel="stylesheet" href="../../assets/css/nav.min.css">
    <link rel="stylesheet" href="../../assets/css/reset.min.css">

</head>

<body>
    <?php
    include_once "../../partials/nav.php";
    ?>

    <div class="container-xl px-4 mt-4">
        <h1 class="mb-4">Account Details</h1>
        <div class="row">
            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0" href="./index.php" target="__blank">Profile</a>
                    <a class="nav-link" href="./order_history.php" target="__blank">Order History</a>
                    <a class="nav-link" href="./wishlist.php" target="__blank">Wishlist</a>
                    <a class="nav-link" href="./security.php" target="__blank">Security</a>
                </nav>
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button">Upload new image</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card -->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                <form action="../../inc/handlers/profile_handler.php" method="POST">
                                    <!-- First Name and Last Name -->
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">First Name</label>
                                            <input class="form-control" id="inputFirstName" type="text" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Last Name</label>
                                            <input class="form-control" id="inputLastName" type="text" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
                                        </div>
                                    </div>

                                    <!-- Email and Password -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmail">Email</label>
                                        <input class="form-control" id="inputEmail" type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Enter new password or leave blank" value="">
                                    </div>

                                    <!-- Phone Number and Address -->
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone Number</label>
                                            <input class="form-control" id="inputPhone" type="tel" name="phone_number" value="<?php echo htmlspecialchars($user['phone_number']); ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputAddress">Address</label>
                                            <input class="form-control" id="inputAddress" type="text" name="address" value="<?php echo htmlspecialchars($user['address']); ?>" required>
                                        </div>
                                    </div>

                                    <!-- City and Postal Code -->
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputCity">City</label>
                                            <input class="form-control" id="inputCity" type="text" name="city" value="<?php echo htmlspecialchars($user['city']); ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPostalCode">Postal Code</label>
                                            <input class="form-control" id="inputPostalCode" type="text" name="postal_code" value="<?php echo htmlspecialchars($user['postal_code']); ?>" required>
                                        </div>
                                    </div>

                                    <!-- Country and Province -->
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputCountry">Country</label>
                                            <input class="form-control" id="inputCountry" type="text" name="country" value="<?php echo htmlspecialchars($user['country']); ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputProvince">Province</label>
                                            <input class="form-control" id="inputProvince" type="text" name="province" value="<?php echo htmlspecialchars($user['province']); ?>" required>
                                        </div>
                                    </div>

                                    <!-- Save changes button -->
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once "../../partials/footer.php"
    ?>

    <!-- Bootstrap CDN  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>