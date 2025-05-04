<?php
// filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/admin/dashboard.php
session_start();
include '../includes/header.php';
include '../includes/db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

// Fetch product count
$query = "SELECT COUNT(*) AS product_count FROM products";
$result = $conn->query($query);
$product_count = $result->fetch_assoc()['product_count'];

// Fetch admin count
$query = "SELECT COUNT(*) AS admin_count FROM admins";
$result = $conn->query($query);
$admin_count = $result->fetch_assoc()['admin_count'];

// Fetch total sales (example placeholder)
$total_sales = 0; // Replace with actual sales query if available
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SmartStreamStore</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
   
    <main class="dashboard">
        <div class="stats">
            <div class="stat-card">
                <h2>Total Products</h2>
                <p><?php echo $product_count; ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Admins</h2>
                <p><?php echo $admin_count; ?></p>
            </div>
            <div class="stat-card">
                <h2>Total Sales</h2>
                <p>$<?php echo number_format($total_sales, 2); ?></p>
            </div>
        </div>
    </main>
</body>
</html>