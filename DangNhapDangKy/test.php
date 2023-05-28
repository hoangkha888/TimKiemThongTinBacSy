<?php
// Thực hiện kết nối tới cơ sở dữ liệu MySQL
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'user';

    $conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
    if (!$conn) {
        echo ("kết nối không thành công");
    }else{
        echo ("kết nối thành công");
    }
?>