<?php
include_once '../models/database.php';

if(isset($_POST['sellerLogin'])){
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    $db = new DataBase();
    $db->dbConnection();
    $result = $db->searchSeller($email, $password);
    if($result == 1){
        header("Location: ../views/sellerHome.php?seller_email=".$email);
    }
}

if(isset($_POST['sellerSignUp'])){
    echo 'fsd';
    echo $_POST['full_Name'];
    echo $_POST['user_email_address'];
    echo $_POST['user_pass'];
    $db = new DataBase();
    $db->dbConnection();
    $db->insertSeller($_POST['full_Name'], $_POST['user_email_address'], $_POST['user_pass']);
}

if(isset($_POST['sellerInfo'])){
    /*$db = new DataBase();
    $db->dbConnection();
    $result = $db->sellerInfo();
    echo $result;*/

    /*$conn = oci_connect('scott', 'tiger', 'localhost/xe');
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $sql = "begin
                    sellerInfo('arif@gmail.com');
                    end;";

    $stid = oci_parse($conn, $sql);
    oci_execute($stid);

    while (($stid_c = oci_get_implicit_resultset($stid))) {
        echo "<h2>New Implicit Result Set:</h2>\n";
        echo "<table>\n";
        while (($row = oci_fetch_array($stid_c, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            echo "<tr>\n";
            foreach ($row as $item) {
                echo "  <td>".($item!==null?htmlentities($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;")."</td>\n";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
    }


    oci_free_statement($stid);
    oci_close($conn);*/

    $conn = oci_connect('scott','tiger', 'localhost/xe') or die;

    if (!$conn) {
        echo 'not connected';
        //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
    else {

        //$sql = 'declare e sellers.seller_email%type := 0; begin sellerInfo(:email, :e); end;';
        //$sql = 'declare output sellers.seller_email%type; begin sellerInfo(:email, output); dbms_output.put_line(output); end;';
        $sql = 'begin sellerInfo(:email, :e); end;';
        echo 'hello';
        $stmt = oci_parse($conn, $sql);
        //$name = 'arif@gmail.com';
        //$message = 0;
        // Bind the input parameter
        oci_bind_by_name($stmt, ':email', $name, 10000);

        // Bind the output parameter
        oci_bind_by_name($stmt, ':e', $message, 200);

        // Assign a value to the input
        $name = 'arif@gmail.com';
        //$message = 0;

        oci_execute($stmt);
        echo 'hfse';
        // $message is now populated with the output value
        echo $message;
    }

    $sql = 'BEGIN sayHello(:name, :message); END;';

    $stmt = oci_parse($conn,$sql);

    // Bind the input parameter
    oci_bind_by_name($stmt,':name',$name,32);

    // Bind the output parameter
    oci_bind_by_name($stmt,':message',$message,32);

    // Assign a value to the input
    $name = 'Harry';

    oci_execute($stmt);

    // $message is now populated with the output value
    print "$message\n";
}

if(isset($_POST['sellerProfile'])){
    $conn = oci_connect('scott','tiger', 'localhost/xe') or die;

    if (!$conn) {
        echo 'not connected';
        //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
    else{
        $sql = 'begin test1(:name, :pass); end;';
        $stmt = oci_parse($conn, $sql);

        oci_bind_by_name($stmt, ':name', $sName, 100);
        $sName = 'JAMAL';

        oci_bind_by_name($stmt, ':pass', $sPass, 100);
        $sPass = 'dcse';

        oci_execute($stmt);
        //oci_bind

        echo $sName."<br>";
        echo $sPass;
    }
}

//seller list btn
if(isset($_POST['sellerList'])){
    $conn = oci_connect('scott','tiger', 'localhost/xe') or die;

    if (!$conn) {
        echo 'not connected';
        //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $query = "begin seller_table(:dsd); end;";

    $curs = oci_new_cursor($conn);
    $stid = oci_parse($conn, $query);
    oci_bind_by_name($stid, ":dsd", $curs, -1, OCI_B_CURSOR);
    oci_execute($stid);
    $data = [];
    oci_execute($curs);  // Execute the REF CURSOR like a normal statement id
    while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
        //$data[] = $row;
        print_r($row);
        echo $row['SELLER_NAME'] . "<br />\n";
    }

    oci_free_statement($stid);
    oci_free_statement($curs);
    oci_close($conn);
}

if(isset($_POST['sellerList2'])){
    $conn = oci_connect('scott','tiger', 'localhost/xe') or die;

    if (!$conn) {
        echo 'not connected';
        //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    /*$query = "declare dsd sellers.seller_name%type; begin seller_table1(dsd); end;";

    //$curs = oci_new_cursor($conn);
    $stid = oci_parse($conn, $query);
    //oci_bind_by_name($stid, "dsd", $curs, 100);
    //oci_execute($stid);
    $data = [];

    oci_execute($stid);  // Execute the REF CURSOR like a normal statement id
    while (($row = oci_fetch_array($stid))) {
        //$data[] = $row;
        print_r($row);
        echo $row['SELLER_NAME'] . "<br />\n";
    }*/

    /*foreach ($data as  $array){
        echo $array['seller_name'];
    }*/

    /*oci_free_statement($stid);
    oci_free_statement($curs);
    oci_close($conn);*/

    $query = "declare dsd sellers.seller_name%type; begin seller_table1(:dsd); end;";

    $stmt= oci_parse($conn, $query);

    /* Binding Parameters */
    $data[] = oci_bind_by_name($stmt, ':dsd', $yourparameter, -1) ;
    $yourparameter = 'faes';

    /* Execute */
    $res = oci_execute($stmt);

    /* Get the output on the screen */
    print_r($res, true);
}

if(isset($_POST['sellerProfile1'])){
    header("Location: sellerProfile.php?email=".$s_email);

    $conn = oci_connect('scott','tiger', 'localhost/xe') or die;

    if (!$conn) {
        echo 'not connected';
        //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $query = "begin seller_profile(:dsd, :email); end;";

    $curs = oci_new_cursor($conn);
    $email = 'arif@gmail.com';
    $stid = oci_parse($conn, $query);
    oci_bind_by_name($stid, ":dsd", $curs, -1, OCI_B_CURSOR);
    oci_bind_by_name($stid, ":email", $email);
    oci_execute($stid);
    $data = [];
    oci_execute($curs);  // Execute the REF CURSOR like a normal statement id
    while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
        //$data[] = $row;
        print_r($row);
        echo $row['SELLER_NAME'] . "<br />\n";
    }

    oci_free_statement($stid);
    oci_free_statement($curs);
    oci_close($conn);

    $conn = oci_connect('scott','tiger', 'localhost/xe') or die;

    if (!$conn) {
        echo 'not connected';
        //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $sql = "begin seller_information(:name, :email); end;";
    //echo 'hello';
    $stmt = oci_parse($conn, $sql);
    //$name = 'arif@gmail.com';
    //$message = 0;
    // Bind the input parameter
    oci_bind_by_name($stmt, ':name', $name, 10000);
    $name = 'faef';
    // Bind the output parameter
    oci_bind_by_name($stmt, ':email', $email, 200);

    // Assign a value to the input
    //$name = 'fsa';
    $email = 'arif@gmail.com';

    oci_execute($stmt);
    echo 'hfse';
    // $message is now populated with the output value
    echo "Hello: ".$name;
}

function seller_Information($s_email){
    $db = new DataBase();
    $db->dbConnection();
    $data1 = $db->sellerProfile($s_email);
    return $data1;
    $i = 0;
    foreach ($data1 as $result1){
        echo "foreachloop ".$result1." Hello"."<br>";
        $i++;
    }
}

?>