<?php
$username = $_POST['Username'];
$password = $_POST['Password'];
if ($username == "admin" && $password == "test123") {
    echo "Hello Admin";
} else {
    echo "In 5s later to return";
    //header("Location:http://localhost:3000/index");
}