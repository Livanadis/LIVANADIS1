<?php
$servername = "localhost";
$username = "Livanadis";
$password = "123456";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$servername = "localhost";
$username = "Livanadis";
$password = "123456";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "CREATE TABLE users (
    username VARCHAR(50)  ,
    title VARCHAR(30) NOT NULL,
    content VARCHAR(50),
    time VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
    echo "数据表创建成功";
} else {
    echo "创建数据表时出现错误: " . $conn->error;
}
echo "连接成功";
$sql = "INSERT INTO users (username, title, content,time )
VALUES ('John', 'Huan', 'Helsochs,ss','2020-4-03 11:22:22')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$servername = "localhost";
$username = "Livanadis";
$password = "123456";
$dbname = "homework";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT * FROM users WHERE username = 'john' ";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    echo " username:   " . $row["username"] . "    title:   " . $row["title"] . "  content:  " . $row["content"] . " time:   " . $row["time"] . "<br>";
}
$sql = "DELETE FROM users WHERE id = 1";
$res=mysqli_query($conn,$sql);
$sql = "UPDATE users SET username ='Hanma',title='update' WHERE id = 4 ";
$res=mysqli_query($conn,$sql);
$conn->close();

