<?php
include_once '../controllers/sellerController.php';
include_once '../controllers/buyerController.php';
?>

<html>
<head>

</head>
<body>
<table align="center">
    <form action="" method="post">
    <tr>
        <td>Full Name</td>
        <td><input type="text" name="full_Name" placeholder="Enter Name"></td>
    </tr>
    <tr>
        <td>User Email</td>
        <td><input type="text" name="user_email_address" placeholder="Email Address"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="user_pass" placeholder="Password"></td>
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
