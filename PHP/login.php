<?php
$username = $_POST['Username'];
$password = $_POST['Password'];
$conn = new mysqli('127.0.0.1', 'root', 'Mengfei0908', 'Student_Information_System');
$sql = $conn->query("select Username from Users where Username='{$username}'and Password='{$password}'");
$row = mysqli_fetch_assoc($sql); //取其中一条
if ($row > 0) { //判断是否已存在
    header('location:/HTML/admin.html');
} else {
    echo "Please Login";
}
$conn->close();
