<?php
$Register_Username = $_POST['Username'];
$Register_Password = $_POST['Password'];
$Register_Email = $_POST['email'];

$conn = new mysqli('127.0.0.1', 'root', 'Mengfei0908', 'Student_Information_System');
if ($conn->connect_error) {
    die("Connection fails." . $conn->connect_error);
}
echo "Connection successful"."<br>";

$sql = "Insert INTO Users(Username,Password,E_Mail) VALUES('$Register_Username','$Register_Password','$Register_Email')";

if ($conn->query($sql) === TRUE) {
    echo "Register succesful" . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
