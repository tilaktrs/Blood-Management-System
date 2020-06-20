<html>
    <head>
    
  <style>
          table,tr,td,th{
              border: 3px solid black;
              border-collapse: collapse;
              margin-left: 0px;
              margin-top: 50px;
          }  
          table{
              width: 100%;
          }
          th{
              width: 30px;
          }
          #bb{
              border-top: 3px solid black;
               width:1350px;
          }
      
    
      </style>
    </head>
<body id="bb">
    <center><h1 style="color:red"><B>DONORS</B></h1></center>
    <br>
<?php
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";
$type= filter_input(INPUT_POST,'btype');
$city=filter_input(INPUT_POST,'city');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT donor_name,donor_blood,donor_number,donor_city,hospital_id,bank_id,donor_id,last_donated from donor 
where donor_blood='$type'
and donor_city='$city'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    
    echo "<table><tr><th> NAME </th><th> BLOOD TYPE </th><th>CONTACTS </th><th> CITY </th><th>HOSPITALID </th><th>BANKID</th><th>ID</th><th>LAST DONATED ON</th></tr>";
    // output data of each row
    while($row = $result->fetch_row()) {
       echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
    }
echo"</table>";
}
      else {
    echo "0 results";
}
$conn->close();
?>
    </body>
    </html>