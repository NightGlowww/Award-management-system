<?php
$username = $_POST['Username'];
$password = $_POST['Password'];
$conn = new mysqli('127.0.0.1','root','Mengfei0908','Student_Information_System');
$sql = $conn->query("SELECT Username FROM Users where Username='{$username}'and Password='{$password}'");
$query =  mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query);
echo $result?$result['Username']."Login succeful":"Login failure.";

$conn->close();