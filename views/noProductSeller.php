<?php
include_once '../models/database.php';
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<table align="center" border="3" class="table">
    <tr>
    <td><strong>SellerID</strong></td>
    <td><strong>Seller Name</strong></td>
    </tr>
<?php
$db = new DataBase();
$db->dbConnection();
$data = $db->sellerWithNoProduct();

if(!empty($data)){
    foreach ($data as $list){
        echo "<tr class='success'>
                    <td class='danger'>";
        echo $list['SELLER_ID'];
        echo "</td>
                <td>";
        echo $list['SELLER_NAME'];
        echo "</td>
        
                </tr>";
    }
}

?>
</table>
</div>
</body>
</html>
