<?php
include_once '../controllers/sellerController.php';
include_once '../controllers/buyerController.php';
include_once '../controllers/adminController.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" name="logIn">
    <table align="center">
        <tr>
            <td>User Email</td>
            <td><input type="text" name="user_email" placeholder="Email Address"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="user_password" placeholder="Password"></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">
                <input type="submit" name="adminLogin" value="LOG IN AS ADMIN"> <br>
                <input type="submit" name="sellerLogin" value="LOG IN AS SELLER"> <br>
                <input type="submit" name="buyerLogin" value="LOG IN AS BUYER"> <br>
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td>

                <a href="signUp.php">Create an Account</a> <br>

            </td>
        </tr>
    </table>
</form>
</body>
</html>
