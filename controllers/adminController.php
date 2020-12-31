<?php
if(isset($_POST['adminLogin'])){
    $admin_email = $_POST['user_email'];
    $password = $_POST['user_password'];
    //echo 'feasf';
    $db = new DataBase();
    $db->dbConnection();
    $sig = $db->searchAdmin($admin_email, $password);

    if($sig == 1){
        $db = new DataBase();
        $db->dbConnection();
        //$buyer_id = $db->fetchBuyerID($buyer_email);

        //foreach ($buyer_id as $b_id){}
        //echo $b_id['buyer_id'];
        header("Location: ../views/adminHome.php?buyer_email=".$admin_email);
    }
    else{
        echo "Admin Pass did not match...";
    }

}

?>
