<?php
include_once '../controllers/productController.php';
?>

<html>
<head>

</head>
    <style>
        a:link, a:visited {
            background-color: #f44336;
            color: #000000;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: #033c11;
        }
        body{
            font-family: 'Numans', sans-serif;
        }

        table{
            background-color: lightgray;
            width: 30%;
        }
        tr{
            height: 30px;
        }

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

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html{
            background: url('https://media.istockphoto.com/photos/assortment-of-colorful-ripe-tropical-fruits-top-view-picture-id995518546?k=6&m=995518546&s=612x612&w=0&h=jUqcvzOQ4onSN5D_Dd8RJFReuO87-0WpB9RXgeju_Kg=') no-repeat center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            height: fit-content;
            width: fit-content;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Numans', sans-serif;
        }
    </style>
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
                        
                    </td>
                    </tr>";

            echo "<td>
                 <a href='changeStatus.php?p_id=" . $data['PRODUCT_ID'] ."' name='." . $data['PRODUCT_ID'] . ".'>Change Status</a>
                    <hr>
                </td> 
                    </tr>";

        }

    }
    ?>
</table>
</body>
</html>
