<?php
include_once '../controllers/productController.php';
?>

<html>
<head>

</head>
<body>
<table align="center">
    <?php
    $row = allProductsList();

    if(!empty($row)){

        foreach ($row as $data){
            echo "<tr>";
            echo "<td>";
            //echo "pid:".$data['PRODUCT_ID'];
            echo "<img src='{$data['PRODUCT_FILE']}' height=200 width=300>" . "<br>"."
                       
                    </td>
                   
                    </tr>";

            echo "<tr>";
            echo "<td> <strong>PRODUCT ID: </strong>";
            echo $data['PRODUCT_ID']."
                    </td>
                    </tr>";

            echo "<tr>";
            echo "<td> <strong>Name: </strong>";
            echo $data['PRODUCT_NAME']."
                    </td>
                    </tr>";

            echo "<tr>";
            echo "<td> <strong>Price: </strong>";
            echo $data['PRICE']."
                    </td>
                    </tr>";

            echo "<tr>";
            echo "<td> <strong>Unit/KG: </strong>";
            echo $data['UNIT_KG']."
                        
                    </td>";

            echo "<tr>";
            echo "<td> <strong>SELLER ID: </strong>";
            echo $data['SELLER_ID']."
                    </td>
                    </tr>";

            echo "<tr>";
            echo "<td> <strong>STATUS: </strong>";
            echo $data['STATUS']."
                        <hr>
                    </td>
                    </tr>";

            /*echo "<td>
                 <a href='removeProduct.php?p_id=" . $data['PRODUCT_ID'] ." &s_email=".$s_email."' name='." . $data['PRODUCT_ID'] . ".'>REMOVE PRODUCT</a>
                </td> 
                    </tr>";*/

        }

    }
    ?>
</table>
</body>
</html>
