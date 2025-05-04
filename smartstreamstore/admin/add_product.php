<?php
// filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/admin/add_product.php
session_start();
include '../includes/db.php'; // Include the database connection
include '../includes/header.php'; // Include the admin header

if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $media_type = $_POST['media_type'];
    $media_path = $_FILES['media']['name'];

    // Ensure the target directory exists
    $target_dir = "../assets/images/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // Create the directory if it doesn't exist
    }
    $target_file = $target_dir . basename($media_path);

    // Move the uploaded file
    if (move_uploaded_file($_FILES['media']['tmp_name'], $target_file)) {
        // Insert product into the database
        $query = "INSERT INTO products (name, description, price, type, status, media_type, media_path) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssdssss', $name, $description, $price, $type, $status, $media_type, $media_path);
        $stmt->execute();

        $success = "Product added successfully!";
    } else {
        $error = "Failed to upload the media file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - SmartStreamStore</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <main class="dashboard">
        <div class="form-container">
            <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <form method="POST" enctype="multipart/form-data">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" placeholder="Enter product name" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter product description" required></textarea>

                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Enter product price" required>

                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="boxed">Boxed</option>
                    <option value="unboxed">Unboxed</option>
                </select>

                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="available">Available</option>
                    <option value="upcoming">Upcoming</option>
                </select>

                <label for="media_type">Media Type</label>
                <select id="media_type" name="media_type" required>
                    <option value="photo">Photo</option>
                    <option value="video">Video</option>
                </select>

                <label for="media">Upload Media</label>
                <input type="file" id="media" name="media" required>

                <button type="submit">Add Product</button>
            </form>
        </div>
    </main>
</body>
</html>