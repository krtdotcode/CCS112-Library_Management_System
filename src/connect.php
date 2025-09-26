<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$dbname = "books_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
