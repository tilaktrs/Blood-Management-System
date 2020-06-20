<?php
session_start();
header('location:bank.php');
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
$hid =filter_input(INPUT_POST,'bankid');
$location =filter_input(INPUT_POST,'location');
$contact =filter_input(INPUT_POST,'contacts');
$mssn =filter_input(INPUT_POST,'mssn');
$pass =filter_input(INPUT_POST,'password');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "sorry";
    die("Connection failed: " . $conn->connect_error);
}

$q="select bank_id,bank_password from bloodbank
where bank_id=$hid and bank_password=$pass";

$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
if(num==1){
    echo"DUPLIGATE ENTRY ";
}
else{
  $sql="insert into bloodbank(bloodbank_id,bank_location,contact_number,manager_ssn,bank_password) values
        ('".$hid."','".$location."','".$contact."','".$mssn."','".$pass."')";
mysqli_query($conn,$sql);

    if ($conn->query($sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}



$conn->close();
?>
