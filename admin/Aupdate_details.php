<?php

include '../conn.php';

$id = $_POST['edit_id'];

$workdesc = $_POST['workdesc'];
$stype = $_POST['stype'];
$scharge = $_POST['scharge'];
$dpayment = $_POST['dpayment'];
$pdate = $_POST['pdate'];
$gstatus = $_POST['gstatus'];

$down = $scharge - $dpayment;


$sql = "UPDATE garments 
        SET garment_work_desc = '$workdesc', 
        garment_type_of_serve = '$stype',
        garment_serv_charge = '$scharge',
        garment_down = '$dpayment',
        garment_bal = '$down',
        garment_pickup_date = '$pdate',
        garment_status = '$gstatus'
        WHERE garment_id = $id ";

if($conn->query($sql) === TRUE){

    $message = 'Garments updated succesfully!';

    echo 
    "<SCRIPT> 
    alert('$message')
    window.location.replace('../admin/workx.php');
    </SCRIPT>";
}
else{
    echo "<SCRIPT> 
    alert('Oops! garments update failed!')
    window.location.replace('../admin/workx.php');
    </SCRIPT>";
}

?>