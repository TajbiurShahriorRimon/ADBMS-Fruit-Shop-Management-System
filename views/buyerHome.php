<?php
$b_email = $_GET['buyer_email'];
include_once '../controllers/buyerController.php';
//$buyerId = getBuyerId($b_email);
$db = new DataBase();
$db->dbConnection();
$buyer_id = $db->fetchBuyerID($b_email);
//$d = data("j, n, Y");
//echo $d;
foreach ($buyer_id as $bID){

}
echo  "<br>".$bID;
?>

<html>
<head>
    <style>
        a:link, a:visited {
            background-color: #366cf4;
            color: #000000;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: #b4d2bc;
        }
        body{
            background-color: ThreeDLightShadow;
        }
    </style>
</head>
<body>
<form action="Login.php" method="post">
    <input type="submit" name="log_out" value="Log Out">
</form>
<form action="sellerShortDetails.php" method="post">
    <input type="submit" name="sellerShortDetails" value="Seller List">
</form>
<table align="center">
    <?php
    $db = new DataBase();
    $db->dbConnection();
    $row = $db->productList();

    if(!empty($row)){

        foreach ($row as $data){

            echo "<tr>";
            echo "<td>";
            //echo "pid:".$data['PRODUCT_ID'];
            echo "<img src='{$data['PRODUCT_FILE']}' height=200 width=300>" . "<br>"."
                       
                    </td>
                   
                    </tr>";

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
                        
                    </td>
                   
                    </tr>";
            echo "<tr>
                <td>";
            //echo  "<a id='orderLinkBtn' href='orderProduct.php?product_id=" . $data['PRODUCT_ID']."&buyer_id=".$buyer_id."'>Order Now</a>";
            echo   "<a id='orderLinkBtn' href='orderProduct.php?p_id=" .$data['PRODUCT_ID'] ." &buyer_id=". $bID." &b_email=". $b_email."'>" ."ORDER NOW".  "</a>";
            echo  "      <hr>
                </td>";

        }

    }
    ?>
</table>
</body>
</html>
<?php
echo "Welcome buyer";
?>