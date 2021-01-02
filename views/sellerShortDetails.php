<?php
include_once '../models/database.php';
?>

<html>
<head>

</head>
<body>
<?php
$db = new DataBase();
$db->dbConnection();
$data = $db->sellerShortInformation();

echo "
    <table align='center' border='3' cellpadding='10'>
        <tr>
            <td><strong>Seller Name</strong></td>
            <td><strong>Seller Email</strong></td>
        </tr>";
if(!empty($data)) {
    foreach ($data as $list) {
        echo "<tr>
                <td>";
        echo $list['SELLER_NAME'];
        echo "</td>";
        echo "<td>";
        echo $list['SELLER_EMAIL'];
        echo "</td>
            </tr>";
    }
}
echo "</table>";
?>


</body>
</html>

