<?php
 include('../conn.php');

//  $fname = $_POST['fname'];
//  $lname = $_POST['lname'];
//  $address = $_POST['address'];
//  $cnumber = $_POST['cnum'];
//  $c_desc = $_POST['cust_desc'];
//  $urole = $_POST['role'];
 $id = $_POST['edit_id'];
//GUMAMIT NG TIMESTAMP SA DATABASE FOR AUTOMATIC DATE STAMP UPON DATA INSERT

 //query
 $sql = "DELETE FROM customers WHERE id = '$id'";

if($conn->query($sql) === TRUE){

    $message = 'Customer deleted succesfully!';

    echo 
    "<SCRIPT> 
    alert('$message')
    window.location.replace('admin_users.php');
    </SCRIPT>";
}
else{
    echo "<SCRIPT> 
    alert('Oops! customer delete failed!')
    window.location.replace('admin_users.php');
    </SCRIPT>";
}


?>