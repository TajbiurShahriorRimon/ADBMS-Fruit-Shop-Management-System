<?php
echo "Welcome Seller";
$s_email = $_GET['seller_email'];
include_once '../controllers/sellerController.php';
//include_once '../models/database.php';

$db = new DataBase();
$db->dbConnection();
$seller_id = $db->fetchSellerID($s_email);
foreach ($seller_id as $sID){

}
echo  "<br>".$sID;
?>

<html>
<head>
</head>
<body>
<form action="Login.php" method="post">
    <input type="submit" name="log_out" value="Log Out"> <br> <br>
</form>
<form action="" method="post">
    <input type="submit" name="sellerInfo" value="My Info">
    <input type="submit" name="sellerProfile" value="My Profile">
    <input type="submit" name="sellerList" value="Seller List">
    <input type="submit" name="sellerList2" value="Seller List 2">
    <input type="submit" name="sellerProfile1" value="Profile">
</form>
<strong><hr></strong>
<table align="center">
    <?php
        $db = new DataBase();
        $db->dbConnection();
        $row = $db->sellerProduct($sID);

        if(!empty($row)){

            foreach ($row as $data){
                echo "<tr>";
                echo "<td>";
                echo $data['PRODUCT_NAME']."
                    </td>
                    </tr>";

                echo "<tr>";
                echo "<td>";
                echo $data['PRICE']."
                    </td>
                    </tr>";

                echo "<tr>";
                echo "<td>";
                echo $data['UNIT_KG']."
                        <hr>
                    </td>
                   
                    </tr>";

            }

        }
    ?>
</table>
</body>
</html>