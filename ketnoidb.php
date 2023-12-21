<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "qlsp";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
try {
    if ($conn->connect_error) {
        throw new Exception("Kết nối thất bại: " . $conn->connect_error);
    }
    echo "Kết nối thành công";
} catch (Exception $e) {
    die($e->getMessage());
}
?>
