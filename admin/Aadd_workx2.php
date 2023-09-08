<?php
include '../conn.php';

    $cust_id = $_POST['customer'];
    $gtype = $_POST['gtype'];
    $wdesc = $_POST['workdesc'];
    $serv_type = $_POST['stype'];
    $scharge = $_POST['scharge'];
    $pdate = $_POST['pdate'];
    $gstatus = "Received";
    $receivedBy = $_SESSION['username'];

    //ITO AY PARA SA GENERATION NG GARMENT ID
    $myuid1 = mt_rand(111,999);
    $myuid2 = mt_rand(111,999);
    $garment_id = $myuid1. '-' .$myuid2;

    $sql = "INSERT INTO garments(cust_id, garment_id, garment_type, garment_work_desc, garment_type_of_serve, garment_serv_charge, garment_pickup_date, garment_status, garment_receivedby)
            VALUES ('$cust_id', '$garment_id', '$gtype', '$wdesc', '$serv_type', '$scharge', '$pdate', '$gstatus', '$receivedBy')";

    if($conn->query($sql) === TRUE){

        $message = 'Workx created succesfully!';
    
        echo 
        "<SCRIPT> 
        alert('$message')
        window.location.replace('../admin/workx.php');
        </SCRIPT>";
    }
    else{
        echo "<SCRIPT> 
        alert('Oops! workx creation failed!')
        window.location.replace('../admin/workx.php');
        </SCRIPT>";
    }

?>


