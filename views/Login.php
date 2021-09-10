<?php
include_once '../controllers/sellerController.php';
include_once '../controllers/buyerController.php';
include_once '../controllers/adminController.php';

?>
<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background-image: url('https://wallpapercave.com/wp/wp3145239.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container{
            height: 100%;
            align-content: center;
        }

        .card{
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
        }
        a{
            color: #2b9247;
        }
        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }

        .card-header h3{
            color: white;
        }

        .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
        }

        input:focus{
            outline-width: 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember{
            color: white;
        }

        .remember input
        {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover{
            color: black;
            background-color: white;
        }

        .links{
            color: white;
        }

        .links a{
            margin-left: 4px;
        }



        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #eaeaea;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
            font-family: "Blackadder ITC";
            color: #ba0606;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: #1ab529;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
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
<div class="header">
    <a href="#default" class="logo"><strong>Fruit Hut</strong></a>
    <div class="header-right">
        <a class="active" href="#home">Home</a>
        <!--<a href="#contact">Contact</a>
        <a href="#about">About</a>-->
    </div>
</div>

<div style="padding-left:20px">
    <h1>Fruit Hut</h1>
    <p>Buy Various Fruits Online!!</p>
</div>

<div class="container">
    <form action="" method="post" name="logIn" class="w3-container">
        <table align="center">
            <tr>
                <td>User Email</td>
                <td><input type="text" name="user_email" placeholder="Email Address" class="w3-input" size="100"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="user_password" placeholder="Password" class="w3-input" size="100"></td>
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

                    <strong><a href="signUp.php">Create an Account</a> </strong><br>

                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
