<?php
include_once '../controllers/productController.php';
?>

<html>
<head>
</head>
<body>
<table align="left">

<!-- Button For Another View Added -->
<form action="buyerOrdersView.php" method="post">
    <tr>
        <td><input type="submit" name="buyerSellerShortProductDetails" value="Buyers Order List"></td>
    </tr>
</form>

<form action="sellersProductShortHist.php" method="">
    <tr>
        <td><input type="submit" name="sellerOnlyWithProduct" value="All Sellers Product History"></td>
    </tr>
</form>

</table>

<table align="center" border="3" cellpadding="2" width="200">
    <tr>
        <td><strong>Seller ID</strong></td>
        <td><strong>Product Name</strong></td>
        <td><strong>Status</strong></td>
    </tr>
<?php
    $data = shortDetails();
    if(!empty($data)){
        foreach ($data as $list){
            echo "<tr>
                    <td>";
            echo $list['SELLER_ID'];
            echo "</td>
                <td>";
            echo $list['PRODUCT_NAME'];
            echo "</td>
                <td>";
            echo $list['STATUS'];
            echo "</td>
                </tr>";
        }
    }
?>
</table>
</body>
</html>
