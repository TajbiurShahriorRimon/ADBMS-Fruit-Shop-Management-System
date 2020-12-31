<?php
$dbusername = 'scott';
$dbpassword = 'tiger';
$hostname = 'localhost/xe';

$conn = oci_connect($dbusername, $dbpassword, $hostname);
if(!$conn){
    echo 'Failed to connect to Oracle';
}
else{
    $query = "select buyer_email, buyer_pass from buyers where buyer_email = '$email' and buyer_pass = '$password'";
    $array = oci_parse($conn, $query);

    oci_execute($array);
echo "faesf";
    while($row = oci_fetch_array($array)){
        if(empty($row)){
            echo 'data not found';
            break;
        }
        else{
            header("Location: buyerHome.php");
        }
    }
}

oci_close($conn);

?>