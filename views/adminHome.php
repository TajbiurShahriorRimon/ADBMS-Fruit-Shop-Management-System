<?php
echo "Welcome Admin";
include_once '../controllers/adminController.php';
include_once '../controllers/buyerController.php';
?>

<html>
<head>
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
            background-color: #5f5911;
            border: none;
            border-radius: 12px;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="Login.php" method="post">
    <input type="submit" name="log_out" value="Log Out">
</form>
<form action="adminSignUp.php" method="post">
    <input type="submit" name="addAdmin" value="Add Admin">
</form>
<form action="productShortDetail.php" method="post">
    <input type="submit" name="allProductsShortDetails" value="All Product List">
</form>
<form action="topProduct.php" method="post">
    <input type="submit" name="topProduct" value="Check The Top Product!">
</form>
</body>
</html>
