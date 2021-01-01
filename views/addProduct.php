<?php
$s_id = $_GET['s_id'];
include_once '../controllers/productController.php';
?>

<html>
<head>

</head>
<body>
<table align="center">

    <tr>
        <td>
            <form action="" enctype="multipart/form-data" method="post">
                <input type="text" name="productName" placeholder="Enter Product Name" size="35"><br>
                <input type="text" name="productPrice" placeholder="Enter Product Price" size="35"><br>
                <input type="text" name="productUnit" placeholder="Enter Product Unit/KG" size="35"><br>
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
