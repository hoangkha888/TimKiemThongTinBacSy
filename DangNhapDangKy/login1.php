<?php
// Thực hiện kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xử lý dữ liệu khi form được gửi đi
if(isset($_POST['login1'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "Đăng nhập thành công!";
    } else {
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}

// Đóng kết nối
$conn->close();
?>