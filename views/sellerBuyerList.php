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
