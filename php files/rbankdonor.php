

<?php
session_start();
header('location:bafterlogin.php');

$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
$uname =filter_input(INPUT_POST,'name');
$group =filter_input(INPUT_POST,'bgroup');
$city =filter_input(INPUT_POST,'city');
$phone =filter_input(INPUT_POST,'phone');
$hid=filter_input(INPUT_POST,'hospitalid');
$bid=filter_input(INPUT_POST,'bankid');
$pass=filter_input(INPUT_POST,'password');
$date=filter_input(INPUT_POST,'date');
$donorid=filter_input(INPUT_POST,'donorid');
$height=filter_input(INPUT_POST,'height');
$weight=filter_input(INPUT_POST,'weight');
$age=filter_input(INPUT_POST,'age');
$gender=filter_input(INPUT_POST,'gender');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "sorry";
    die("Connection failed: " . $conn->connect_error);
}

    // sql to insert into table p_register
$sql="insert into donor(donor_name,donor_blood,donor_number,donor_city,hospital_id,bank_id,donor_password,last_donated,donor_id,height,weight,age,sex)values('".$uname."','".$group."','".$phone."','".$city."','".$hid."','".$bid."','".$pass."','".$date."','".$donorid."','".$height."','".$weight."','".$age."','".$gender."')";

mysqli_query($conn,$sql);

    if ($conn->query($sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



$conn->close();
?>
