<?php
$host = 'localhost'; // Replace with your database host
$user = 'root';      // Replace with your database username
$password = '';      // Replace with your database password
$dbname = 'google-exam sys'; // Replace with your database name

// Create a connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
