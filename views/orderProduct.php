<?php
//echo 'fsf';
$p_id = $_GET['p_id'];
$b_id = $_GET['buyer_id'];
$b_email = $_GET['b_email'];
/*echo $p_id."<br>";
echo $b_id."<br>";
echo $b_email."<br>";*/
include_once '../models/database.php';
$db = new DataBase();
$db->dbConnection();
$db->addOrder($p_id, $b_id);
header("Location: buyerHome.php?buyer_email=".$b_email);
//include_once 'buyerHome.php'
?>