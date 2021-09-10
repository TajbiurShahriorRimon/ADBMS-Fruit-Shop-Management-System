<?php
include_once '../controllers/productController.php';
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
        background-image: url('https://images.pexels.com/photos/1128678/pexels-photo-1128678.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }
</style>
<body>
<div class="container">
<table align="center" border="3" cellpadding="2" class="table">
    <tr bgcolor="aqua">
        <td><strong>Seller ID</strong></td>
        <td><strong>Product Name</strong></td>
        <td><strong>Buyer ID</strong></td>
    </tr>
    <?php
    $data = buyerProductShortOrderList();
    if(!empty($data)){
        foreach ($data as $list){
            echo "<tr bgcolor='ThreeDFace'>
                    <td bgcolor='#bdb76b'>";
            echo $list['PRODUCT_ID'];
            echo "</td>
                <td bgcolor='#4682b4'>";
            echo $list['PRODUCT_NAME'];
            echo "</td>
                <td>";
            echo $list['BUYER_ID'];
            echo "</td>
                </tr>";
        }
    }
    ?>
</table>
</div>
</body>
</html>
