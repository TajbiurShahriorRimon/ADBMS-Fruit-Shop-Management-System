<?php
include_once '../controllers/productController.php';
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background-image: url('https://images.unsplash.com/photo-1577234286642-fc512a5f8f11?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHw%3D&w=1000&q=80');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        input[type=button], input[type=submit], input[type=reset] {
            background-color: #030903;
            border: none;
            border-radius: 12px;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }

        input:hover{
            background-color: #243b55;
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
<div class="container">
    <table align="center" border="3" cellpadding="2" width="200" class="table" bgcolor="#87cefa">
        <tr bgcolor="#f0ffff">
            <td><strong>Seller ID</strong></td>
            <td><strong>Product Name</strong></td>
            <td><strong>Status</strong></td>
        </tr>
    <?php
        $data = shortDetails();
        if(!empty($data)){
            foreach ($data as $list){
                echo "<tr bgcolor= #d3d3d3>
                        <td bgcolor='MenuText'>";
                echo $list['SELLER_ID'];
                echo "</td>
                    <td bgcolor='GrayText'>";
                echo $list['PRODUCT_NAME'];
                echo "</td>
                    <td bgcolor='InfoText'>";
                echo $list['STATUS'];
                echo "</td>
                    </tr>";
            }
        }
    ?>
    </table>
</div>
</body>
</html>
