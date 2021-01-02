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
            echo "<img src='{$data['PRODUCT_FILE']}' height=200 width=300>" . "<br>"."
                        <hr>
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
                        <hr>
                    </td>
                   
                    </tr>";

        }

    }
    ?>
</table>
</body>
</html>
<?php
echo "Welcome buyer";
?>