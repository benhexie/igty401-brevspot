<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "brevspot";
$port = 3306;

// create "brevspot" database
$tempConn = mysqli_connect($servername, $username, $password, null, $port);
$sql = "CREATE DATABASE IF NOT EXISTS brevspot";
mysqli_query($tempConn, $sql);
mysqli_close($tempConn);

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname, $port);

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
mysqli_query($conn, $sql);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
