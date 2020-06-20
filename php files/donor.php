<!doctype html>
<html lang="en">
  <head>
      <style>
          table,tr,td,th{
              border: 3px solid black;
              border-collapse: collapse;
              border-spacing: inherit;
              margin-left: 5px;
              margin-right: 5px;
          }  
          table{
              width: 100%;
          }
          th{
              width: 40px;
          }
         /* #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
          #customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

          #customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}*/
          #bb{
              border-top: 3px solid black;
              width:1350px;
              background-image: url(home3.jpg);
              background-position: center;
              background-size: cover;
          }
      
    
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>DONORS</title>
  </head>
  <body id="bb">
    <center><h1 style="color:white"><B>DONORS</B></h1></center>
      <form action="sdonors.php" method="post">  
          <input type="text" placeholder="BLOOD-TYPE" style="width: 200px;margin-left:40px;border: 2px solid black"  name="btype">
      <input type="text" placeholder="CITY" style="width: 200px ;border: 2px solid black" name="city">
      <button type="submit" class="btn btn-success" style="margin-left: 10px" value="submit">SEARCH</button>
      </form>

          <br>
      <br>
          
      <?php
    
$servername = "localhost";
$username = "trs";
$password = "trsrootpass@php";
$dbname = "bloodproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT donor_name,donor_blood,donor_number,donor_city,hospital_id,bank_id,donor_id,last_donated,hospital_name from donor ";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    
    echo "<table><tr><th> NAME </th><th> BLOOD TYPE </th><th>CONTACTS </th><th> CITY </th><th>HOSPITALID </th><th>BANKID</th><th>ID</th><th>LAST DONATED ON</th><th>HOSPITAL_NAME</th></tr>";
    // output data of each row
    while($row = $result->fetch_row()) {
       echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td></tr>";
    }
echo"</table>";
}
      else {
    echo "0 results";
}
$conn->close();
?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1lim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>