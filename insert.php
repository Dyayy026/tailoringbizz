<?php
 include('conn.php');


 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $address = $_POST['address'];
 $cnumber = $_POST['cnum'];
 $password = $_POST['pword'];
 $pword = password_hash($password, PASSWORD_DEFAULT);
 $c_desc = $_POST['cust_desc'];
 $urole = $_POST['role'];

//ITO AY PARA SA GENERATION NG USER ID
$myuid1 = mt_rand(000,999);
$myuid2 = mt_rand(000,999);
$cust_id = $myuid1. '-' .$myuid2;


//GUMAMIT NG TIMESTAMP SA DATABASE FOR AUTOMATIC DATE STAMP UPON DATA INSERT

 //query
 $sql = "INSERT INTO customers (cust_id, cust_fname, cust_lname, cust_address, cust_cnumber, cust_password, cust_desc, cust_role) 
        VALUES ('$cust_id','$fname', '$lname', '$address', '$cnumber', '$pword', '$c_desc', '$urole')";

if($conn->query($sql) === TRUE){

    $message = 'Account created succesfully!';

    echo 
    "<SCRIPT> 
    alert('$message')
    window.location.replace('signup.php');
    </SCRIPT>";
}
else{
    echo "<SCRIPT> 
    alert('Oops! account creation failed!')
    window.location.replace('signup.php');
    </SCRIPT>";
}


?>