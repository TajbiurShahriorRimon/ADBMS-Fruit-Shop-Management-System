<?php
include_once '../controllers/productController.php';
?>

<html lang="en">
<head>

</head>
<body>
<table align="center" border="3" cellpadding="2">
    <tr>
        <td><strong>Seller ID</strong></td>
        <td><strong>Product Name</strong></td>
        <td><strong>Buyer ID</strong></td>
    </tr>
    <?php
    $data = buyerProductShortOrderList();
    if(!empty($data)){
        foreach ($data as $list){
            echo "<tr>
                    <td>";
            echo $list['PRODUCT_ID'];
            echo "</td>
                <td>";
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
</body>
</html>
