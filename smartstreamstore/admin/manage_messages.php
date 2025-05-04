<!-- filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/admin/manage_messages.php -->
<?php
session_start();
include '../includes/db.php'; // Include the database connection
include '../includes/header.php'; // Include the admin header

if (!isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}

// Fetch all contact messages
$query = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Messages - SmartStreamStore</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>
<body>
    <main class="dashboard">
        <div class="admin-list">
            <h2>Contact Messages</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($message = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $message['id']; ?></td>
                            <td><?php echo htmlspecialchars($message['name']); ?></td>
                            <td><?php echo htmlspecialchars($message['email']); ?></td>
                            <td><?php echo htmlspecialchars($message['message']); ?></td>
                            <td><?php echo $message['created_at']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>