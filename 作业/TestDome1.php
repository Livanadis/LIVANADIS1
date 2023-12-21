<?php
$phone=$_POST['phone'];
$password=$_POST['password'];
$servername = "localhost";
$username = "Livanadis";
$password = "123456";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "CREATE TABLE user1 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(50)  ,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === TRUE) {
    echo "数据表创建成功";
} else {
    echo "创建数据表时出现错误: " . $conn->error;
}
$sql = "INSERT INTO user1 (phone, password) VALUES ('$phone', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "注册成功！";
} else {
    echo "注册失败: " . $conn->error;
}
$conn->close();








