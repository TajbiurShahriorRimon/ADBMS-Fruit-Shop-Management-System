<?php
$s_id = $_GET['s_id'];
include_once '../controllers/productController.php';
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background-image: url('https://wallpaperaccess.com/full/2329942.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        input[type=button], input[type=submit], input[type=reset] {
            background-color: #5d4d4f;
            border: none;
            border-radius: 12px;
            color: #b0aa97;
            padding: 15px 25px;
            text-decoration: blueviolet;
            margin: 4px 2px;
            cursor: pointer;

        }
        input[type=file]{
            background-color: #5d4d4f;
            color: #033c11;
            text-decoration: lightseagreen;
            margin: 4px 2px;
            cursor: pointer;
        }
        html {
            height: 100%;
        }

    </style>
</head>
<body>
<table align="center">

    <tr>
        <td>
            <form action="" enctype="multipart/form-data" method="post">
                <input type="text" name="productName" placeholder="Enter Product Name" class="w3-input" size="35"><br>
                <input type="text" name="productPrice" placeholder="Enter Product Price" class="w3-input" size="35"><br>
                <input type="text" name="productUnit" placeholder="Enter Product Unit/KG" class="w3-input" size="35"><br>
                <strong>Post a photo for the Product as a thumbnail</strong><br><br>
                <input type="file" name="file"><br/>
                <input type="submit" value="Done" name="addFruitProduct"> <br/>
            </form>
            <?php
            if(isset($_POST['submit1'])){
                echo "<strong>Course added Successfully</strong>";
            }

            ?>
        </td>
    </tr>
</table>
</body>
</html>
