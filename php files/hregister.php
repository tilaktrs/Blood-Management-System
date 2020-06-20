<?php
session_start();
header('location:hospital.php');
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
$hid =filter_input(INPUT_POST,'hospitalid');
$name =filter_input(INPUT_POST,'name');
$city =filter_input(INPUT_POST,'city');
$state =filter_input(INPUT_POST,'state');
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

$q="select hospital_id,hospital_password from hospital 
where hospital_id=$hid and hospital_password=$pass";

$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
if(num==1){
    echo"DUPLIGATE ENTRY ";
}
else{
  $sql="insert into hospital(hospital_id,hospital_name,hospital_city,hospital_state,hospital_number,manager_ssn,hospital_password) values
        ('".$hid."','".$name."','".$city."','".$state."','".$contact."','".$mssn."','".$pass."')";
mysqli_query($conn,$sql);

    if ($conn->query($sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
}



$conn->close();
?>
