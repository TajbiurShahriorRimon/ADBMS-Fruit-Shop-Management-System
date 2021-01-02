<?php
class DataBase{

    private $dbusername = 'scott';
    private $dbpassword = 'tiger';
    private $hostname = 'localhost/xe';

    private $conn;

    function dbConnection()
    {
        $this->conn = oci_connect($this->dbusername, $this->dbpassword, $this->hostname);
        if (!$this->conn) {
            echo 'Failed to connect to Oracle';
            //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            die("Not connected!");
        }
    }

    function insertSeller($s_name, $s_email, $s_pass){

        /*create or replace procedure insert_sellers (s_name in sellers.seller_name%type, s_email in sellers.seller_email%type, s_pass in sellers.seller_pass%type)
        is
        id sellers.seller_id%type;

        begin

        select max(seller_id) + 10 into id from sellers;

        insert into sellers (seller_id, seller_name, seller_email, seller_pass)
        values (id, s_name, s_email, s_pass);
        end;*/

        $query = "begin insert_sellers (:name, :email, :pass); end;";

        $result = oci_parse($this->conn, $query);


        oci_bind_by_name($result, ':name', $name, 100);
        $name = $s_name;
        oci_bind_by_name($result, ':email', $email, 100);
        $email = $s_email;
        oci_bind_by_name($result, ':pass', $pass, 100);
        $pass = $s_pass;

        oci_execute($result);

        oci_free_statement($result);
        oci_close($this->conn);
    }

    function generateBuyerId(){
        /*create or replace procedure generate_buyerId (b_id in out buyers.buyer_id%type)
        is
        id buyers.buyer_id%type;

        begin
        select max(buyer_id) + 10 into id from buyers;
        b_id := id;
        end;*/

        $query = "begin generate_buyerId (:b_id); end;";

        $result = oci_parse($this->conn, $query);

        oci_bind_by_name($result, ':b_id', $b_id, 100);
        $b_id = 0;

        oci_execute($result);
        return $b_id;
        oci_close($this->conn);
    }

    function insertBuyer($b_id, $b_name, $b_email, $b_pass){

        /*create or replace trigger check_email_buyer
        before insert on buyers

        for each row
        declare
        count_email int;

        begin
        select count(*) into count_email from buyers
        where buyer_email = :new.buyer_email;
        if(count_email > 0) then
           Raise_application_error(-20116,'Buyer Email already Exists');
        end if;
        end;*/

        $query = "insert into buyers (buyer_id, buyer_name, buyer_email, buyer_pass)
        values ($b_id, '$b_name', '$b_email', '$b_pass')";

        $result = oci_parse($this->conn, $query);
        try {
            $exception = oci_execute($result);
            throw new Exception('Number is zero.');
        } catch (Exception $e){

            return 0;
        }



        oci_free_statement($result);
        oci_close($this->conn);
        //return 1;
    }

    function searchSeller($email, $password){
        $query = "select seller_email, seller_pass from sellers where seller_email = '$email' and seller_pass = '$password'";
        $result = oci_parse($this->conn, $query);

        oci_execute($result);
        echo "sdfes";
        while($row = oci_fetch_array($result)){
            if(empty($row)){
                echo 'data not found';
                return 0;
                break;
            }
            else{
                echo "fefa";
                return 1;
                //header("Location: sellerHome.php?seller_email="+$email);
            }
        }
        echo "fega";
    }

    function insertAdmin($name, $email, $pass){
        /*create sequence admin_id_seq
        start with 150
        increment by 10;*/

        /*create or replace procedure insert_Admin(name admins.admin_name%type, email admins.admin_email%type, pass admins.admin_pass%type)
        as
        begin
        insert into admins (admin_id, admin_name, admin_email, admin_pass)
                    values (admin_id_seq.nextval, name, email, pass);
        end;*/

        $query = "begin insert_Admin(:name, :email, :pass); end;";

        $result = oci_parse($this->conn, $query);

        oci_bind_by_name($result, ':name', $name, 100);
        oci_bind_by_name($result, ':email', $email, 100);
        oci_bind_by_name($result, ':pass', $pass, 100);

        oci_execute($result);
        //return $b_id;
        oci_close($this->conn);
    }

    function searchAdmin($email, $password){
        $query = "select admin_email, admin_pass from admins where admin_email = '$email' and admin_pass = '$password'";
        $result = oci_parse($this->conn, $query);

        oci_execute($result);
        echo "sdfes";
        while($row = oci_fetch_array($result)){
            if(empty($row)){
                echo 'data not found';
                return 0;
                break;
            }
            else{
                echo "fefa";
                return 1;
                //header("Location: sellerHome.php?seller_email="+$email);
            }
        }
        echo "fega";
    }

    function fetchSellerID($email){
        $query = "select seller_id from sellers where seller_email = '$email'";
        $result = oci_parse($this->conn, $query);

        oci_execute($result);
        $row = oci_fetch_array($result);
        return $row;

    }

    function searchBuyer($email, $password){
        $query = "select buyer_email, buyer_pass from buyers where buyer_email = '$email' and buyer_pass = '$password'";
        $result = oci_parse($this->conn, $query);

        oci_execute($result);
        echo "sdfes";
        while($row = oci_fetch_array($result)){
            if(empty($row)){
                echo 'data not found';
                return 0;
                break;
            }
            else{
                echo "fefa";
                return 1;
                //header("Location: sellerHome.php?seller_email="+$email);
            }
        }
        echo "fega";
    }

    function fetchBuyerID($email){
        $query = "select buyer_id from buyers where buyer_email = '$email'";
        $result = oci_parse($this->conn, $query);

        oci_execute($result);
        $row = oci_fetch_array($result);

        return $row;

    }

    function sellerInfo(){
        //$query = "select seller_email, seller_pass from sellers where seller_email = '$email' and seller_pass = '$password'";
        /*$query = "begin
                    sellerInfo('arif@gmail.com');
                    end";
        $result = oci_parse($this->conn, $query);
        oci_execute($result);
        $row = oci_fetch_array($result);

        return $row;*/

/*______________________________________________________________
        $tablename = 'SELLERS';
        $columnname = 'SELLER_ID';

        $query = "begin 
               :cursor := selectFromTable(:tabl, :colm);
             end;";

        $stid = oci_parse($this->conn, $query);

        $p_cursor = oci_new_cursor($this->conn);

        oci_bind_by_name($stid, ":tabl", $tablename);
        oci_bind_by_name($stid, ":colm", $columnname);

        oci_bind_by_name($stid, ":cursor", $p_cursor, -1, OCI_B_CURSOR);

        oci_execute($stid);
        oci_execute($p_cursor, OCI_DEFAULT);

        while (($row = oci_fetch_array($p_cursor, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            echo $row['SELLER_ID'] . "<br />\n";
        }*/

        //if ($p)
            $s = "BEGIN DBMS_OUTPUT.ENABLE(NULL); END;";
        //else
            $s = "BEGIN DBMS_OUTPUT.DISABLE(); END;";
        $s = oci_parse($this->conn, $s);
        $r = oci_execute($s);
        oci_free_statement($s);
        return $r;
    }

    function sellerProfile($s_email){
        $query = "begin seller_information(:name, :email, :s_id, :acc_date); end;";

        $stmt = oci_parse($this->conn, $query);
        oci_bind_by_name($stmt, ":name", $name, 1000);
        //$name = 'fsdf';

        oci_bind_by_name($stmt, ":email", $email, 1000);
        $email = $s_email;

        oci_bind_by_name($stmt, ":s_id", $seller_num, 1000);
        $email = $s_email;

        oci_bind_by_name($stmt, ":acc_date", $acc_date, 1000);
        $email = $s_email;

        oci_execute($stmt);
        $data[] = $seller_num;
        $data[] = $name;
        $data[] = $email;
        $data[] = $acc_date;
        return $data;
        /*$i = 0;
        echo "Database: ".$name."  ".$email."<br>";
        foreach ($data as $result){

        }
        print_r($result, true);
        return $result;
        echo 'lop ends'."<br>";*/
    }

    function insertProduct($name, $price, $unit, $s_id, $file){
        /*create or replace trigger check_price
        before insert on products

        for each row
        declare
        product_price products.price%type;

        begin
        if (:new.price < 0) then
           Raise_application_error(-20119,'Price Cannot be Negative');
        end if;
        end;*/

        /*create or replace trigger check_unit_kg
        before insert on products

        for each row

            begin
        if (:new.unit_kg < 0) then
           Raise_application_error(-20120,'Unit/KG Cannot be Negative');
        end if;
        end;*/

        /*create sequence product_id_seq
        start with 450
        increment by 10;*/


        /*create or replace procedure insert_product(p_name products.product_name%type, p_price products.price%type, p_unit_kg products.unit_kg%type, s_id products.seller_id%type, p_file products.product_file%type)
        is

        begin

        insert into products (PRODUCT_ID, PRODUCT_NAME, PRICE, UNIT_KG, SELLER_ID, STATUS, PRODUCT_FILE)
        values(product_id_seq.nextval, p_name, p_price, p_unit_kg, s_id, 'VALID', p_file);
        end;*/


        $query = "begin insert_product (:name, :price, :unit, :s_id, :file); end;";

        $stid = oci_parse($this->conn, $query);

        oci_bind_by_name($stid, ":name", $name, 1000);
        oci_bind_by_name($stid, ":price", $price, 1000);
        oci_bind_by_name($stid, ":unit", $unit, 1000);
        oci_bind_by_name($stid, ":s_id", $s_id, 1000);
        oci_bind_by_name($stid, ":file", $file, 1000);

        oci_execute($stid);

    }

    function sellerProduct($s_id){
        $query = "begin seller_product(:data, :s_id); end;";

        $curs = oci_new_cursor($this->conn);
        $stid = oci_parse($this->conn, $query);

        oci_bind_by_name($stid, ":data", $curs, -1, OCI_B_CURSOR);

        oci_bind_by_name($stid, ":s_id", $s_id, 1000);

        oci_execute($stid);
        $data = [];
        oci_execute($curs);  // Execute the REF CURSOR like a normal statement id
        while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            $data[] = $row;
            //print_r($row);
            //echo $row['PRICE'] . "<br />\n";
        }
        return $data;

        oci_free_statement($stid);
        oci_free_statement($curs);
        oci_close($this->conn);
    }

    function productList(){
        /*create or replace procedure product_list(data out sys_refcursor)
            as

            begin
            open data for
                        select product_name, price, unit_kg, product_file
                        from products
            where status = 'VALID';

            end;*/

        $query = "begin product_list(:data); end;";

        $curs = oci_new_cursor($this->conn);
        $stid = oci_parse($this->conn, $query);

        oci_bind_by_name($stid, ":data", $curs, -1, OCI_B_CURSOR);

        //oci_bind_by_name($stid, ":s_id", $s_id, 1000);

        oci_execute($stid);
        $data = [];
        oci_execute($curs);  // Execute the REF CURSOR like a normal statement id
        while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            $data[] = $row;
            //print_r($row);
            //echo $row['PRICE'] . "<br />\n";
        }
        return $data;

        oci_free_statement($stid);
        oci_free_statement($curs);
        oci_close($this->conn);
    }

    /*function sellerShortInformation(){
        $query = "begin seller_details_list(:data); end;";

        $curs = oci_new_cursor($this->conn);
        $stid = oci_parse($this->conn, $query);

        oci_bind_by_name($stid, ":data", $curs, -1, OCI_B_CURSOR);
        oci_execute($stid);

        $data = [];

        oci_execute($curs);

        while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            $data[] = $row;
            //print_r($row);
            //echo $row['PRICE'] . "<br />\n";
        }

        oci_free_statement($stid);
        oci_free_statement($curs);
        oci_close($this->conn);
    }*/

    function sellerShortInformation(){
        $query = "select * from seller_details";

        $result = oci_parse($this->conn, $query);
        oci_execute($result);
        //$row = oci_num_rows($result);

        $data = [];
        //echo "sdfes";
        //if($row > 0) {
            while (($row = oci_fetch_assoc($result)) != false) {
                //print_r($data);
                $data [] = $row;
                //$data = $rowArray;
                //echo $data['SELLER_NAME'];
            }
            return $data;
        /*}
        else{
            return $data;
        }*/
        echo "fega";
    }

}
?>
