<?php
$s_email = $_GET['email'];
include_once '../controllers/sellerController.php';
?>

<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        html{
            background: url('https://www.wallpaperup.com/uploads/wallpapers/2015/03/28/648454/d5a48c95f2f9f16a9df1d1a7c5cc245f-700.jpg') no-repeat center center fixed;
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
</head>
<body>
<div align="center">
    <?php
        $info = seller_Information($s_email);
    ?>
</div>
<table cellpadding="3" cellspacing="3" border="2" align="center">
    <tr>
        <td>ID </td>
        <td>Name </td>
        <td>Email</td>
        <td>Account Created </td>
    </tr>
    <tr>
    <?php
    $j = 0;
    //echo "<td>";
        foreach ($info as $seller_info){
            echo "<td>$seller_info</td>";
            //$j++;
        }
        //echo "</td>";
    ?>
    </tr>
</table>
</body>
</html>
