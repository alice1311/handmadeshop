<?php
$server = 'localhost';      
$username = 'root';        
$password = '';             
$database = 'handmadeshop'; 

// Kết nối đến MySQL
$conn = new mysqli($server, $username, $password, $database, 3307);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

?>