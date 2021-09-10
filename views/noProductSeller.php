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
<style>

    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
        background: url('https://wallpapercave.com/wp/wp3106294.jpg') no-repeat center center fixed;
        background-size: cover;
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
<body>
<div class="container">
<table align="center" border="3" class="table">
    <tr bgcolor="#4682b4">
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
