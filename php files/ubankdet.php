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

if(isset($_POST['update'])){
    // sql to update  manager
$sql="update bankblood SET quantity='$_POST[amount]',cost='$_POST[price]' 
where bloodbank_id='$u'
AND blood_type='$_POST[type]'";
    
$query_run=mysqli_query($conn,$sql);

    if ($query_run) {
       // header('location:bafterlogin.php');
        echo '<script type="text/javascript"> alert("DATA UPDATED SUCCESSFULLY ") </script>';
        
} else {
    echo "Error creating updation: " . $conn->error;
        echo'<script> type="text/javascript"> alert("DATA   NOT UPDATED  ")</script>';
}

}

$conn->close();
?>