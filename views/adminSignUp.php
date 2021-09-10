<?php
include_once '../controllers/adminController.php';
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
        background-image: url('https://images.hdqwalls.com/download/fruit-cones-qhd-1600x1200.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    input[type=button], input[type=submit], input[type=reset] {
        background-color: #5d4d4f;
        border: none;
        border-radius: 12px;
        color: #b0aa97;
        padding: 15px 25px;
        text-decoration: blueviolet;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
</html>

<table align="center">
    <form action="" method="post">
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="admin_full_Name" placeholder="Enter Name" class="w3-input" size="50"></td>
        </tr>
        <tr>
            <td>Admin Email</td>
            <td><input type="text" name="admin_email_address" placeholder="Email Address" class="w3-input" size="50"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="admin_pass" placeholder="Password" class="w3-input" size="50"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="adminSignUp" value="Add Admin"> <br>
            </td>
        </tr>
    </form>
</table>
