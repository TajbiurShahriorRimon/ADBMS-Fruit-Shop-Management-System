<?php
$prod_id = $_GET['p_id'];
$email = $_GET['s_email'];
/*echo $prod_id."<br>";
echo $email."<br>";*/
include_once '../models/database.php';
$db = new DataBase();
$db->dbConnection();
$db->removeProductSeller($prod_id);
//echo 'gesgf';
header("Location: sellerHome.php?seller_email=".$email);
?>
