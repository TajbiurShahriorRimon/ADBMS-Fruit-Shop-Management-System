<?php
$dbusername = 'scott';
$dbpassword = 'tiger';
$hostname = 'localhost/xe';

$conn = oci_connect($dbusername, $dbpassword, $hostname);
if(!$conn){
    echo 'Failed to connect to Oracle';
}
else{
    $query = "select admin_email, admin_pass from admins where admin_email = '$email' and admin_pass = '$password'";
    $array = oci_parse($conn, $query);

    oci_execute($array);
    while($row = oci_fetch_array($array)){
        if(empty($row)){
            echo 'data not found';
            break;
        }
        else{
            header("Location: adminHome.php");
        }
    }
}

oci_close($conn);

?>