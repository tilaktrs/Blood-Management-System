<?php
session_start();
header('location:bafterlogin.php');
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
$uname =filter_input(INPUT_POST,'name');
$city =filter_input(INPUT_POST,'city');
$phone =filter_input(INPUT_POST,'contact');
$hid=filter_input(INPUT_POST,'hospitalid');
$bid=filter_input(INPUT_POST,'bankid');
$ssn=filter_input(INPUT_POST,'ssn');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "sorry";
    die("Connection failed: " . $conn->connect_error);
}

    // sql to insert into table p_register
$sql="insert into manager(manager_name,manager_phone,manager_city,hospital_id,bank_id,manager_ssn)values('".$uname."','".$phone."','".$city."','".$hid."','".$bid."','".$ssn."')";

mysqli_query($conn,$sql);

    if ($conn->query($sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$conn->close();
?>
