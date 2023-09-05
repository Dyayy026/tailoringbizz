<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['cust_fname'];
   
   $ses_sql = mysqli_query($db,"SELECT cust_fname FROM customers WHERE cust_fname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['cust_fname'])){
      header("location:login.php");
      die();
   }
?>