<?php
$servername = "localhost";
$username = "root"; // Default XAMPP user
$password = ""; // Default XAMPP password (empty)
$dbname = "database_name"; // Please replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
