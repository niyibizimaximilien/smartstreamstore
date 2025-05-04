<?php
// filepath: /c:/xampp/htdocs/smartstreamstore/smartstreamstore/includes/db.php

$host = 'localhost';
$username = 'root'; // Default XAMPP username
$password = ''; // Default XAMPP password
$database = 'smartstreamstore';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>