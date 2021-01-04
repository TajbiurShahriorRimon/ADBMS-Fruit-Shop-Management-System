<?php
$prod_id = $_GET['p_id'];

include_once '../models/database.php';
$db = new DataBase();
$db->dbConnection();
$db->changeProductStatus($prod_id);
//echo 'dsf';
header("Location: allProducts.php");
?>
