<?php
 include('../conn.php');

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $address = $_POST['address'];
 $cnumber = $_POST['cnum'];
 $c_desc = $_POST['cust_desc'];
 $urole = $_POST['role'];
 $id = $_POST['edit_id'];
//GUMAMIT NG TIMESTAMP SA DATABASE FOR AUTOMATIC DATE STAMP UPON DATA INSERT

 //query
 $sql = "UPDATE customers SET cust_fname = '$fname', cust_lname = '$lname', cust_cnumber = '$cnumber', cust_address = '$address', cust_desc = '$c_desc', cust_role = '$urole'
        WHERE id = $id";

if($conn->query($sql) === TRUE){

    $message = 'User updated succesfully!';

    echo 
    "<SCRIPT> 
    alert('$message')
    window.location.replace('admin_users.php');
    </SCRIPT>";
}
else{
    echo "<SCRIPT> 
    alert('Oops! customer update failed!')
    window.location.replace('admin_users.php');
    </SCRIPT>";
}


?>