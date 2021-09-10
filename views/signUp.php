<?php
include_once '../controllers/sellerController.php';
include_once '../controllers/buyerController.php';
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background-image: url('https://wallpaperaccess.com/full/2329942.jpg');
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

</head>
<body>
<div class="login-box">
    <h2>Registration</h2>
<table align="center">
    <form action="" method="post">
    <tr>
        <td bgcolor="#ff1493">Full Name</td>
        <td><input type="text" name="full_Name" placeholder="Enter Name" class="w3-input" size="50"></td>
    </tr>
    <tr>
        <td bgcolor="#663399">User Email</td>
        <td><input type="text" name="user_email_address" placeholder="Email Address" class="w3-input" size="50"></td>
    </tr>
    <tr>
        <td bgcolor="#8b0000">Password</td>
        <td><input type="password" name="user_pass" placeholder="Password" class="w3-input" size="50"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="sellerSignUp" value="Sign Up AS SELLER"> <br>
            <input type="submit" name="buyerSignUp" value="Sign Up AS BUYER"> <br>
        </td>
    </tr>
    </form>
</table>
</body>
</html>
