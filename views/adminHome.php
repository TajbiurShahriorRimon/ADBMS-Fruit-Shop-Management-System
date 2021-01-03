<?php
echo "Welcome Admin";
include_once '../controllers/adminController.php';
include_once '../controllers/buyerController.php';
?>

<html>
<head>
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
</body>
</html>
