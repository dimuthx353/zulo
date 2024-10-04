<?php
session_start();
include_once '../../inc/db.php';
include_once '../../inc/function.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/admin.min.css">
    <link rel="stylesheet" href="../../assets/css/reset.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body class="bg-dark">
    <div class="container">
        <nav>
            <!-- Admin Profile Section -->
            <div class="admin-profile">
                <img src="https://via.placeholder.com/80" alt="Profile Picture">
                <div class="admin-name">John Doe</div>
                <button class="manage-profile">Manage Profile</button>
            </div>

            <!-- Navigation Tabs -->
            <ul>
                <li class="gnav1 currentPage">Products</li>
                <li class="gnav2">Category</li>
                <li class="gnav3">Sub Category</li>
                <li class="gnav4">Manage Users</li>
            </ul>
        </nav>

        <div class="contents" id="contents">
            <article id="page1" class="show top">
                <section>
                    <h1>Add Products</h1>
                    <!-- Update the form with the correct method and action -->
                    <form class="col-6 mx-auto my-0 p-5" action="../../inc/handlers/admin/addProducts.php" method="post">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="productName" aria-describedby="productNameHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Leave a description here" id="description" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="sku" class="form-label">sku</label>
                            <input type="text" class="form-control" id="sku" name="sku" required>
                        </div>
                        <div class="mb-3">
                            <label for="imageUrl" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="imageUrl" name="imageUrl" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Categories</label>
                            <select class="form-control" id="category" name="category">
                                <?php
                                // Fetch main categories
                                $sqlMainCategories = "SELECT id, main_category_name FROM maincategories";
                                $stmtMainCategories = $conn->prepare($sqlMainCategories);
                                $stmtMainCategories->execute();
                                $maincategories = $stmtMainCategories->fetchAll(PDO::FETCH_ASSOC);

                                // Populate dropdown with main categories
                                foreach ($maincategories as $category) {
                                    echo "<option value='" . $category['id'] . "'>" . $category['main_category_name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="subCategories" class="form-label">Sub Categories</label>
                            <select class="form-control" id="subCategories" name="subCategories">
                                <?php
                                // Fetch subcategories
                                $sqlSubCategories = "SELECT category_id, subCategoryName FROM subcategories";
                                $stmtSubCategories = $conn->prepare($sqlSubCategories);
                                $stmtSubCategories->execute();
                                $subCategories = $stmtSubCategories->fetchAll(PDO::FETCH_ASSOC);

                                // Populate dropdown with subcategories
                                foreach ($subCategories as $subCategory) {
                                    echo "<option value='" . $subCategory['subCategoryName'] . "'>" . $subCategory['subCategoryName']  . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>



                </section>
            </article>
            <article id="page2">
                <section>
                    <h1>Add Category</h1>
                    <form class="col-6 mx-auto my-0 p-5" action=" ../../inc/handlers/admin/addMain.php" method="post">
                        <!-- Main Category Name -->
                        <div class="mb-3">
                            <label for="mainCategory" class="form-label">Main Category Name</label>
                            <input type="text" class="form-control" id="mainCategory" name="mainCategory" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </section>
            </article>
            <article id="page3">
                <section>
                    <h1>Add Sub Category</h1>
                    <form class="col-6 mx-auto my-0 p-5" action="../../inc/handlers/admin/addSub.php" method="post">
                        <!-- Category Name -->
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <select class="form-control" id="categoryName" name="categoryName" required>
                                <?php
                                $sql = "SELECT id, main_category_name FROM maincategories";
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                $maincategories = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch main categories

                                // Populate dropdown with categories
                                foreach ($maincategories as $maincategory) {
                                    echo "<option value='" . $maincategory['main_category_name'] . "'>" . htmlspecialchars($maincategory['main_category_name']) . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="subCategoryName" class="form-label">Sub Category Name</label>
                            <input type="text" class="form-control" id="subCategoryName" name="subCategoryName" aria-describedby="subCategoryNameHelp" required>
                        </div>

                        <!-- Category Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Enter category description" id="description" name="description" required></textarea>
                        </div>

                        <!-- Category Image URL -->
                        <div class="mb-3">
                            <label for="categoryImageUrl" class="form-label">Category Image URL</label>
                            <input type="text" class="form-control" id="categoryImageUrl" name="categoryImageUrl" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                </section>
            </article>
            <article id="page4">
                <section>
                    <h1>Manage Users</h1>
                    <p>This is tab four.</p>
                </section>
            </article>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js" integrity="sha512-MlEyuwT6VkRXExjj8CdBKNgd+e2H+aYZOCUaCrt9KRk6MlZDOs91V1yK22rwm8aCIsb5Ec1euL8f0g58RKT/Pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../../assets/js/admin.js"></script>


</body>

</html>