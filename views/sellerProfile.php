<?php
$s_email = $_GET['email'];
include_once '../controllers/sellerController.php';
?>

<html>
<head>

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
