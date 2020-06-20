<?php
 session_start(); 
if(!isset($_SESSION['username'])){
    header('location:public.php');
    exit();
    }
$u=$_SESSION['username'];
?>

<!doctype html>
<style>
    #bb{
        
        border: 3px solid blue;
        width:auto;
        height:640px;
        background-image: url(rec.jpg);
        background-position: center;
        background-size: cover;
        
        
    }
    #i{
        margin-left: 120px;;
        float: left;
    }
   
    h2{
        margin-right: 500px;
    }
    #l{
        margin-right: 600px;
    }
    

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
          
      
</style>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>LOGGED IN</title>
  </head>
  <body id="bb">
      <button type="button" class="btn btn-danger" style="margin-right:1000px"><a href="logout.php" style="color:white">LOGOUT</a></button>
    <img src="donor.png" id="i">
      <center><h2 style="color:red">WELCOME <?php  echo $_SESSION['username'] ?></h2></center>
      <div id="details">
      <center><label style="margin-left:250px;color:orange;font-size:20px;">BLOOD GROUP:</label></center>
      <center><input type="text"  style="width: 100px;height:50px;border: 5px solid  red;border-radius: 50%;margin-left: 260px; padding-left:30px;"  value="<?php  echo $_SESSION['blood'] ?>" ></center>
      <br><br>
      <label  style="margin-left:65px; color:orange;font-size:20px;">NAME:</label>
      <input type="text"  style="width: 200px;border: 2px solid black;margin-left: 10px;" value="<?php  echo $_SESSION['name'] ?>">
      <label style="margin-left:175px;color:orange;font-size:20px;">AGE:</label>
      <input type="number" style="width: 200px;border: 2px solid black"  value="<?php  echo $_SESSION['age'] ?>"><br><br>
<label  style="margin-left:100px;color:orange;font-size:20px;">WEIGHT:</label>
      <input type="number" style="width: 200px;border: 2px solid black" value="<?php  echo $_SESSION['weight'] ?>">
      <label  style="margin-left:20px;color:orange;font-size:20px;">HEIGHT:</label>
      <input type="text" style="width: 200px;border: 2px solid black" value="<?php  echo $_SESSION['height'] ?>">
      <label  style="margin-left:40px;color:orange;font-size:20px;">LAST DONATED ON:</label>
      <input type="date" style="width: 200px;border: 2px solid black"  value="<?php  echo $_SESSION['date'] ?>">
          </div>
      <hr style="border:3px solid black">
    <!-- Optional JavaScript -->
          
          
<?php
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

$user=$_SESSION['username'];
//echo "$user";
$q ="select donor_name,donor_blood,age,weight,height,last_donated,donor_id from donor 
where donor_id ='$user'";
       $result=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($result);
  //  print_r($row);
        $name=$row[0];
        $_SESSION['name']=$name;
        $blood=$row[1];
        $_SESSION['blood']=$blood;
        $age=$row[2];
        $_SESSION['age']=$age;
        $weight=$row[3];
        $_SESSION['weight']=$weight;
        $height=$row[4];
        $_SESSION['height']=$height;
         $date=$row[5];
        $_SESSION['date']=$date;
        
?>
     
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

$sql = "SELECT hospital_id,blood_type,quantity,name,state,contacts from hospitalblood
where quantity <=1000";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    
    echo "<table><tr><th>HOSPITAL_ID </th><th> BLOOD TYPE </th><th>QUANTITY </th><th> NAME </th><th>STATE </th><th>CONTACTS</th></tr>";
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
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>