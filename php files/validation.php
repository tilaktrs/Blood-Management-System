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

$q = "select donor_id,donor_password from donor 
where donor_id='$uname' 
and donor_password='$pass'";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

if($num == 1){
    
    $_SESSION['username']=$uname;
    header('location:afterlogin.php');
}
else{
    header('location:public.php');
        echo"please sign up!";

}
/*
if ($result->num_rows >0){
    $row = $result->fetch_assoc()){
        $_SESSION['blood']=$row['2'];
        header('location:afterlogin.php');
    }
    */

$conn->close();
?>
