<?php
include_once '../controllers/productController.php';

?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
        background-image: url('https://images.pexels.com/photos/1132047/pexels-photo-1132047.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }
</style>
<body>

<div class="container">
<table align="center" border="3" class="table">
    <tr bgcolor="#ff7f50">
        <td><strong>Seller ID</strong></td>
        <td><strong>PRODUCT Name</strong></td>
        <td><strong>Product ID</strong></td>
        <td><strong>PRODUCT</strong></td>
    </tr>
    <?php
    $data = topOrderProductDetail();
    if(!empty($data)){
        foreach ($data as $list){
            echo "<tr class='success'>
                    <td class='danger'>";
            echo $list['SELLER_ID'];
            echo "</td>
                <td>";
            echo $list['PRODUCT_NAME'];
            echo "</td>
                <td class='danger'>";
            echo $list['PRODUCT_ID'];
            echo "</td>
                <td>";
            echo "<img src='{$list['PRODUCT_FILE']}' height=200 width=300>";
            echo "</td>
                </tr>";
        }
    }
    ?>
</table>
</div>
</body>
</html>
