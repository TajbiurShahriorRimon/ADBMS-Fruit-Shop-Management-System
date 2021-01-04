<?php
include_once '../controllers/productController.php';
?>

<html>
<head>
    <style>
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
    </style>
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

    <form action="noProductSeller.php" method="post">
        <tr>
            <td><input type="submit" name="sellerWithNoProduct" value="Seller With No Product"></td>
        </tr>
    </form>

</table>
<table align="right">
    <tr>
        <td>
            <form action="allProducts.php" method="post">
                <input type="submit" name="allProducts" value="See Products in DETAILS">
            </form>
        </td>
    </tr>
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
