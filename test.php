<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="register.php" method="POST">
        <table align="center">
            <caption>
                <h1>Register</h1>
            </caption>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="Password"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="Sex" value="male">Male
                    <input type="radio" name="Sex" value="female">Female
                </td>
            </tr>
            <tr>
                <td>Birthday: </td>
                <td><input type="date" name="Birthday"></td>
            </tr>
            <tr>
                <td>E_Mail: </td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit" id="Submit"> </td>
                <td><input type="reset" name="Reset" id="Reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
$email = $_POST['email'];
echo $email;