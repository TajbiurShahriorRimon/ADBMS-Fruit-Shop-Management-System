<?php
    $dbusername = 'scott';
    $dbpassword = 'tiger';
    $hostname = 'localhost/xe';

    $conn = oci_connect($dbusername, $dbpassword, $hostname);
    if(!$conn){
        echo 'Failed to connect to Oracle';
    }
    else{
        $query = "select seller_email, seller_pass from sellers where seller_email = '$email' and seller_pass = '$password'";
        $array = oci_parse($conn, $query);

        oci_execute($array);
        echo "sdfes";
        while($row = oci_fetch_array($array)){
            if(empty($row)){
                echo 'data not found';
                break;
            }
            else{
                echo "fefa";
                header("Location: sellerHome.php");
            }
        }
        echo "fega";
    }

    oci_close($conn);

?>

<html>
<head><title>Oracle demo</title></head>
<body>

</body>
</html>