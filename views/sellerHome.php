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
/*echo  "<br>".$sID;*/
include_once '../controllers/productController.php';

?>

<html>
<head>
    <style>
        a:link, a:visited {
            background-color: #f44336;
            color: #000000;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: #033c11;
        }
        body{
            background-color: ThreeDLightShadow;
        }

         input[type=button], input[type=submit], input[type=reset] {
             background-color: #5f5911;
             border: none;
             border-radius: 12px;
             color: white;
             padding: 15px 25px;
             text-decoration: none;
             margin: 4px 2px;
             cursor: pointer;
         }

        @import url('https://fonts.googleapis.com/css?family=Numans');

        body{
            background: url('http://3.bp.blogspot.com/-9oJH12YpjJw/V-nzPLn6VNI/AAAAAAAA3eE/SA5m1tFOcHoJvP1zlGPUqq8VBrfBKJRpQCHM/s1600/desktop-hd-images-of-fresh-fruits-and-vegetables.jpg') no-repeat center center fixed;
            background-size: cover;
            height: fit-content;
            width: fit-content;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            font-family: 'Numans', sans-serif;
        }
        .sellerProduct{
            color: ThreeDDarkShadow;
            background-color: #b4d2bc;
            width: 30%;
        }
        }
        tr{
            height: 30px;
        }
    </style>
</head>
<body>
<form action="Login.php" method="post">
    <input type="submit" name="log_out" value="Log Out"> <br> <br>
</form>
<table>
<form action="" method="post">
    <tr>
        <td><input type="submit" name="sellerProfile1" value="Profile"></td>
        <td><input type="submit" name="addProduct" value="Add A Fruit Product"></td>
    </tr>
</form>
</table>

<table>
    <tr>
        <form action="adminContactList.php" method="post">
        <td><input type="submit" name="adminShortContactList" value="Admin Contact List"></td>
        </form>
        <form action="" method="post">
            <td><input type="submit" name="sellerBuyerList" value="My Buyer List"></td>
        </form>
    </tr>
</table>

<strong><hr></strong>
<table align="center" class="sellerProduct">
    <?php
        $db = new DataBase();
        $db->dbConnection();
        $row = $db->sellerProduct($sID);

        if(!empty($row)){

            foreach ($row as $data){
                echo "<tr>";
                echo "<td>";
                //echo "pid:".$data['PRODUCT_ID'];
                echo "<img src='{$data['PRODUCT_FILE']}' height=200 width=300>" . "<br>"."
                       
                    </td>
                   
                    </tr>";

                echo "<tr>";
                echo "<td> <strong>Name: </strong>";
                echo $data['PRODUCT_NAME']."
                    </td>
                    </tr>";

                echo "<tr>";
                echo "<td> <strong>Price: </strong>";
                echo $data['PRICE']."
                    </td>
                    </tr>";

                echo "<tr>";
                echo "<td> <strong>Unit/KG: </strong>";
                echo $data['UNIT_KG']."
                        <hr>
                    </td>";

                echo "<td>
                 <a href='removeProduct.php?p_id=" . $data['PRODUCT_ID'] ." &s_email=".$s_email."' name='." . $data['PRODUCT_ID'] . ".'>REMOVE PRODUCT</a>
                </td> 
                    </tr>";

            }

        }
    ?>
</table>
</body>
</html>