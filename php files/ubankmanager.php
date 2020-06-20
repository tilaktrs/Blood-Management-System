<?php
 session_start(); 
if(!isset($_SESSION['username'])){
    header('location:bank.php');
    exit();
    }

$u=$_SESSION['username'];
?>


<?php
session_start();
header('location:bafterlogin.php');
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "sorry";
    die("Connection failed: " . $conn->connect_error);
}

    // sql to update  manager
$sql="update manager SET manager_ssn='$_POST[ssn]',hospital_id='$_POST[hospitalid]',manager_name='$_POST[name]',manager_city='$_POST[city]',manager_phone='$_POST[contact]' where bank_id='$u'";


    if (mysqli_query($conn,$sql)) {
        header('location:bafterlogin.php');
    echo "updated successfully";
} else {
    echo "Error creating updation: " . $conn->error;
}



$conn->close();
?>
