<?php
include_once '../models/database.php';

if(isset($_POST['addProduct'])){
    header("Location: ../views/addProduct.php?s_id=".$sID);
}

if(isset($_POST['addFruitProduct'])){
    $source = "productFiles/".$_FILES["file"]["name"];
    $filepath = $source;
    echo $filepath;

    $name = $_POST['productName'];
    $price = $_POST['productPrice'];
    $unit = $_POST['productUnit'];
    //$name = $_POST[''];

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
        //echo "<img src=" . $filepath . " height=200 width=300 />";
    }

    $db = new DataBase();
    $db->dbConnection();
    $db->insertProduct($name, $price, $unit, $s_id, $filepath);
}
function shortDetails(){
    $db = new DataBase();
    $db->dbConnection();
    $result = $db->allProductsShortDetails();
    return $result;

}

function buyerProductShortOrderList(){
    $db = new DataBase();
    $db->dbConnection();
    $result = $db->buyerSellerProductsShortDetails();
    return $result;
}

function sellersProductHistShort(){
    $db = new DataBase();
    $db->dbConnection();
    $result = $db->sellersShortInfoWithProductHist();
    return $result;
}

?>

