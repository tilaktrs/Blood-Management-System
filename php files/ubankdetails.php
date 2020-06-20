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
$sql="update bankblood SET blood_type='$_POST[type]',quantity='$_POST[amount]',cost='$_POST[price]' 
where bloodbank_id='$u'";


    if (mysqli_query($conn,$sql)) {
        header('location:bafterlogin.php');
    echo "updated successfully";
} else {
    echo "Error creating updation: " . $conn->error;
}



$conn->close();
?>
