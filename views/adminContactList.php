<?php
include_once '../controllers/adminController.php';
?>

<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    body{
        background: url('https://img3.goodfon.com/wallpaper/nbig/f/7f/natyurmort-vino-bokaly-frukty.jpg') no-repeat center center fixed;
        background-size: cover;
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
<div class="container">
<table align="center" border="3" cellpadding="2" width="200" class="table">
    <tr>
        <td><strong>Admin Name</strong></td>
        <td><strong>Admin Email</strong></td>
    </tr>
    <?php
    $data = adminShortInformation();
    if(!empty($data)){
        foreach ($data as $list){
            echo "<tr class='success'>
                    <td class='danger'>";
            echo $list['ADMIN_NAME'];
            echo "</td>
                <td>";
            echo $list['ADMIN_EMAIL'];
            echo "</td>
                </tr>";
        }
    }
    ?>
</table>
</body>
</html>