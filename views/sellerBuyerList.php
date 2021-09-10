<?php
$s_id = $_GET['s_id'];

include_once '../models/database.php';

$db = new DataBase();
$db->dbConnection();
$row = $db->sellerBuyersList($s_id);
?>

<html>
<head>

</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html{
        background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAXFpSrL9x1rAqk6KTdTo9koBAZKRv5paSig&usqp=CAU') no-repeat center center fixed;
        background-size: cover;
        background-repeat: no-repeat;
        height: fit-content;
        width: fit-content;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        font-family: 'Numans', sans-serif;
    }

    table{
        background-color: lightgray;
        width: 30%;
    }
    tr{
        height: 30px;
    }
</style>
<body>
<table align="center">
    <?php
    if(!empty($row)){

    foreach ($row as $data){

    echo "<tr>";
        echo "<td> <strong>BUYER ID: </strong>";
            echo $data['BUYER_ID']."
        </td>
    </tr>";

    echo "<tr>";
        echo "<td> <strong>BUYER NAME: </strong>";
            echo $data['BUYER_NAME']."
        </td>
    </tr>";

    echo "<tr>";
        echo "<td> <strong>PRODUCT: </strong>";
            echo $data['PRODUCT_NAME']."
            <hr>
        </td>
            
    </tr>";

    }

    }
    ?>
</table>
</body>
</html>
