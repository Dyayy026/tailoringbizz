<?php

session_start();

$servename = "localhost";
$username = "root";
$password = "";
$dbname = "tailoringbizz";

//create a connection
$conn = new mysqli($servename, $username, $password, $dbname);

//check if connection is succesful
if($conn->connect_error){
    die("connection error!" . $conn->connect_error);
}
else{
    // echo "connected succesfully!";
}

?>