<?php
session_start();
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "public";
$uname =filter_input(INPUT_POST,'username');
$pass=filter_input(INPUT_POST,'password');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to insert into table
$sql="insert into p_login values( NULL ,'$uname','$pass')";

if ($conn->query($sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
