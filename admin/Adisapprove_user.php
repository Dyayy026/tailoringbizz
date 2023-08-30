<?php
 include('../conn.php');

 $cust_status = "Pending";
 $id = $_POST['edit_id'];
//GUMAMIT NG TIMESTAMP SA DATABASE FOR AUTOMATIC DATE STAMP UPON DATA INSERT

 //query
 $sql = "UPDATE customers SET cust_status = '$cust_status' WHERE id = $id";

if($conn->query($sql) === TRUE){

    $message = 'User disapproved!';

    echo 
    "<SCRIPT> 
    alert('$message')
    window.location.replace('admin_user_approved.php');
    </SCRIPT>";
}
else{
    echo "<SCRIPT> 
    alert('Oops! disapproval failed!')
    window.location.replace('admin_user_approved.php');
    </SCRIPT>";
}


?>