
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
              width: 770px;
              height: auto;
          }
          th{
              width: 40px;
          }
          #bb{
            
              width:800px;
          }
      
      
      
      
      
      
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>donores</title>
  </head>
  <body id="bb">
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

$sql = "SELECT hospital_id,blood_type,name,state,contacts,quantity from hospitalblood where
quantity <=500";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    
    echo "<table><tr><th>HOSPITAL_ID</th><th> BLOOD TYPE </th><th>HOSPITAL_NAME</th><th>STATE</th><th>CONTACTS </th><th> QUANTITY[less than 1 unit]</th></tr>";
    // output data of each row
    while($row = $result->fetch_row()) {
       echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>