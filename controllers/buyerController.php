<?php
include_once '../models/database.php';
if(isset($_POST['buyerLogin'])){
    $buyer_email = $_POST['user_email'];
    $password = $_POST['user_password'];
    //echo 'feasf';
    $db = new DataBase();
    $db->dbConnection();
    $sig = $db->searchBuyer($buyer_email, $password);

    if($sig == 1){
        $db = new DataBase();
        $db->dbConnection();
        //$buyer_id = $db->fetchBuyerID($buyer_email);

        //foreach ($buyer_id as $b_id){}
        //echo $b_id['buyer_id'];
        header("Location: ../views/buyerHome.php?buyer_email=".$buyer_email);
    }
    else{
        echo "Buyer Pass did not matched...";
    }

}
if(isset($_POST['buyerSignUp'])){
    echo 'fsd';
    $has_err = "";
    $f_name =  $_POST['full_Name'];
    $u_email =  $_POST['user_email_address'];
    $u_pass =  $_POST['user_pass'];

    $db = new DataBase();
    $db->dbConnection();
    $generatedId = $db->generateBuyerId();
    echo $generatedId;
    if($generatedId >= 10) {
        echo
        $db->insertBuyer($generatedId, $_POST['full_Name'], $_POST['user_email_address'], $_POST['user_pass']);
    }
    else{
        $has_err = "Buyer Email Already Exists...";
    }
    //$data = $db->insertBuyer();

    //return $data;
}
?>
