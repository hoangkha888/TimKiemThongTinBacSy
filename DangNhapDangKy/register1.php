<?php
// Thực hiện kết nối tới cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xử lý dữ liệu khi form được gửi đi
if(isset($_POST['register1'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    // Insert dữ liệu vào bảng người dùng
    $sql = "INSERT INTO users (fullname, email, phone, password) VALUES ('$fullname', '$email', '$phone', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: Login.php");
        exit();
    } else {
        echo "Đăng ký thất bại: " . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>