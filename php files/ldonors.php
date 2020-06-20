<?php
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "public";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, NAME, O+/O-/....,CITY,PHONE NO.,HOSPITAL ID FROM p_register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]." ". " Name: " . $row["NAME"]. " " ."BLOOD TYPE:". $row["O+/O-/...."].
            " "."CITY:".$row["CITY"]." "."CONTACTS:".$row["PHONE NO."]." "."HOSPITAL ID".["HOSPITAL ID"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>