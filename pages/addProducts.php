<?php
// Include the database connection and function files
include_once '../inc/db.php';
include_once '../inc/function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $productName = $_POST['productName'] ?? ''; // Get the product name
    $description = $_POST['description'] ?? ''; // Get the description
    $price = $_POST['price'] ?? ''; // Get the price
    $stock = $_POST['stock'] ?? ''; // Get the stock
    $imageUrl = $_POST['imageUrl'] ?? ''; // Get the image URL
    $category = $_POST['category'] ?? ''; // Get the category (1 for Men, 2 for Women)
    $sku = $_POST['sku'] ?? ''; // Get the category (1 for Men, 2 for Women)
    $subCategory = $_POST['subCategories'] ?? ''; // Get the category (1 for Men, 2 for Women)

    // Validate if required fields are filled
    if (!empty($productName) && !empty($description) && !empty($price) && !empty($stock) && !empty($imageUrl)) {
        // Prepare the SQL query to insert the product
        $sql = "INSERT INTO products (product_name, description, price, stock_quantity, image_url, category_id,sku,subCategory) 
                VALUES (:productName, :description, :price, :stock, :imageUrl, :category,:sku,:subCategory)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':productName', $productName);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':imageUrl', $imageUrl);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':sku', $sku);
        $stmt->bindParam(':subCategory', $subCategory);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo "Product added successfully!";
        } else {
            echo "Error adding product.";
        }
    } else {
        echo "Please fill all fields.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/addProducts.min.css">
</head>

<body>
    <h1 class="text-center">Add Product Form</h1>
    <!-- Update the form with the correct method and action -->
    <form class="col-6 mx-auto my-0 p-5" action="addProducts.php" method="post">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>