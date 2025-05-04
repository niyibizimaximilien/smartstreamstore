<?php
// filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/admin/manage_admins.php
session_start();
include '../includes/header.php';
include '../includes/db.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

// Handle adding a new admin
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_admin'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'child';

    $query = "INSERT INTO admins (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $username, $password, $role);
    $stmt->execute();

    $success = "Child admin added successfully!";
}

// Handle deleting an admin
if (isset($_GET['delete'])) {
    $admin_id = $_GET['delete'];

    $query = "DELETE FROM admins WHERE id = ? AND role = 'child'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $admin_id);
    $stmt->execute();

    $success = "Child admin deleted successfully!";
}

// Fetch all admins
$query = "SELECT * FROM admins";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admins - SmartStreamStore</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
  
    <main class="dashboard">
        <div class="form-container">
            <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
            <form method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>

                <button type="submit" name="add_admin">Add Admin</button>
            </form>
        </div>

        <div class="admin-list">
            <h2>Existing Admins</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($admin = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $admin['id']; ?></td>
                            <td><?php echo $admin['username']; ?></td>
                            <td><?php echo ucfirst($admin['role']); ?></td>
                            <td>
                                <?php if ($admin['role'] == 'child'): ?>
                                    <a href="?delete=<?php echo $admin['id']; ?>" class="delete-button">Delete</a>
                                <?php else: ?>
                                    <span class="main-admin">Main Admin</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>