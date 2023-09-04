<?php
include '../conn.php';

    $cust_id = $_POST['cust_id'];
    $garment_id = 789-456;
    $gtype = $_POST['gtype'];
    $wdesc = $_POST['workdesc'];
    $serv_type = $_POST['stype'];
    $scharge = $_POST['scharge'];
    $pdate = $_POST['pdate'];
    $gstatus = "Received";

    $sql = "INSERT INTO garments(cust_id, garment_id, garment_type, garment_work_desc, garment_type_of_serve, garment_serv_charge, garment_pickup_date, garment_status)
            VALUES ('$cust_id', '$garment_id', '$gtype', '$wdesc', '$serv_type', '$scharge', '$pdate', '$gstatus')";

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