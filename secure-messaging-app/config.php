<?php
$host = "localhost";
$port = "3306"; // Port is usually optional, omit if not needed
$username = "root"; // default for XAMPP/MAMP/WAMP
$user_pass = "root"; // default for XAMPP/MAMP/WAMP
$database_in_use = "secure_messaging"; 

// Create connection
$conn = new mysqli($host, $username, $user_pass, $database_in_use, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>