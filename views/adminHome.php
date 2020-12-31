<?php
include_once '../controllers/adminController.php';
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
</body>
</html>
<?php
    echo "Welcome Admin";
?>
