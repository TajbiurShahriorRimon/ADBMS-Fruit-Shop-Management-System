<?php
include_once '../models/database.php';
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background: url('https://images.unsplash.com/photo-1577234286642-fc512a5f8f11?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHw%3D&w=1000&q=80') no-repeat center center fixed;
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
</head>
<body>
<?php
$db = new DataBase();
$db->dbConnection();
$data = $db->sellerShortInformation();

echo "
    <div class='container'>
    <table align='center' border='3' cellpadding='10' class='table'>
        <tr bgcolor='#708090'>
            <td><strong>Seller Name</strong></td>
            <td><strong>Seller Email</strong></td>
        </tr>";
if(!empty($data)) {
    foreach ($data as $list) {
        echo "<tr bgcolor='#ffe4c4'>
                <td>";
        echo $list['SELLER_NAME'];
        echo "</td>";
        echo "<td bgcolor='#d2691e'>";
        echo $list['SELLER_EMAIL'];
        echo "</td>
            </tr>";
    }
}
echo "</table>
</div>";
?>


</body>
</html>

