<?php
include_once '../inc/db.php';
include_once '../inc/function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mainCategory = $_POST['mainCategory']; // Get the main category name

    // Prepare the SQL query to insert the main category
    $sql = "INSERT INTO mainCategories (main_category_name) VALUES (:mainCategory);";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bindParam(':mainCategory', $mainCategory);

    // Execute the query
    if ($stmt->execute()) {
        echo "Main category added successfully!";
    } else {
        echo "Error adding main category.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Main Category Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/addCategories.min.css">
</head>

<body>
    <h1 class="text-center">Add Main Category Form</h1>
    <form class="col-6 mx-auto my-0 p-5" action="./addMainCategories.php" method="post">
        <!-- Main Category Name -->
        <div class="mb-3">
            <label for="mainCategory" class="form-label">Main Category Name</label>
            <input type="text" class="form-control" id="mainCategory" name="mainCategory" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>