<?php
session_start();
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
$uname =filter_input(INPUT_POST,'username');
$pass=filter_input(INPUT_POST,'password');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "sorry";
    die("Connection failed: " . $conn->connect_error);
}

$q = "select bloodbank_id,bank_password from bloodbank
where bloodbank_id='$uname' 
and bank_password ='$pass'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

if($num == 1){
    
    $_SESSION['username']=$uname;
    header('location:bafterlogin.php');
}
else{
    header('location:bank.php');
        echo"please sign up!";

}


$conn->close();
?>
