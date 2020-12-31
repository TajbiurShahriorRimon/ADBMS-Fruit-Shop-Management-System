<?php
include_once '../controllers/adminController.php';
?>

<table align="center">
    <form action="" method="post">
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="admin_full_Name" placeholder="Enter Name"></td>
        </tr>
        <tr>
            <td>Admin Email</td>
            <td><input type="text" name="admin_email_address" placeholder="Email Address"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="admin_pass" placeholder="Password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="adminSignUp" value="Add Admin"> <br>
            </td>
        </tr>
    </form>
</table>
