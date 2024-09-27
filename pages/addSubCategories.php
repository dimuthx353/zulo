<?php
include_once '../inc/db.php';
include_once '../inc/function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['description']; // Get the description
    $categoryImageUrl = $_POST['categoryImageUrl']; // Get the image URL
    $subCategoryName = $_POST['subCategoryName']; // Get the sub-category name
    $categoryName = $_POST['categoryName']; // Get the selected category name

    // Prepare the SQL query to insert the category
    $sql = "INSERT INTO subCategories ( category_name,subCategoryName, description, category_imgUrl) VALUES (:categoryName, :subCategoryName, :description, :categoryImageUrl);";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categoryImageUrl', $categoryImageUrl);
    $stmt->bindParam(':subCategoryName', $subCategoryName);
    $stmt->bindParam(':categoryName', $categoryName); // Bind the main category ID

    // Execute the query
    if ($stmt->execute()) {
        echo "<p class='text-success'>Category added successfully!</p>";
    } else {
        echo "<p class='text-danger'>Error adding category: " . implode(", ", $stmt->errorInfo()) . "</p>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Category Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/addCategories.min.css">
</head>

<body>
    <h1 class="text-center">Add sub Category Form</h1>
    <form class="col-6 mx-auto my-0 p-5" action="./addSubCategories.php" method="post">
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
</body>

</html>