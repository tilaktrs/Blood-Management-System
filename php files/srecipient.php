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
    <center><h1 style="color:red"><B>RECIPIENTS</B></h1></center>
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

$sql = "SELECT recipient_name,recipient_blood,recipient_number,recipient_city,hospital_id,received_on,age FROM recipient
where recipient_blood='$type'
and recipient_city='$city'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    
   echo "<table><tr><th> NAME </th><th> BLOOD TYPE </th><th>CONTACTS </th><th> CITY </th><th>HOSPITALID </th><th>RECEIVED ON</th><th>AGE</th></tr>";
    // output data of each row
    while($row = $result->fetch_row()) {
       echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
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