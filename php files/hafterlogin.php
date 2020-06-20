<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>
      <style>
    #bb{
        
        border: 15px solid white;
        width:auto;
        height:640px;
        background-image: url(1.jpg);
        background-size: cover;
        
        
    }
          .box{
              display: flex;
              justify-content: space-around;
              width: 1100px;
              height: 500px;
          }
          .part1{
              width: 200px;
              height: 500px;
              
              
          }
          .part2{
              width:800px;
              height: 500px;
               
          }
          #a{
              margin-top: 50px;
              border: 3px solid black;
          }
          #b{
              margin-top: 40px;
              border: 3px solid black;
              
          }
          #c{
              margin-top: 40px;
              border: 3px solid black;
          }
          #d{
               border: 3px solid white;
          }

</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>user logged in </title>
  </head>
  <body id="bb">

      <button type="button" class="btn btn-danger" style="margin-right:0px"><a href="hlogout.php" style="color:white">LOGOUT</a></button>
      
              <div class="btn-group">
  <button type="button" class="btn btn-success  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 1120px;width:100px;">
    ADD
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="hdregister.php" style="color:red">DONOR</a>
    <a class="dropdown-item" href="rmanager.php" style="color:red">MANAGER</a>
    
  </div>
</div>
          
      <!-- Example single danger button -->

    <center><h2 style="color:red">WELCOME <?php  echo $_SESSION['username'] ?></h2></center>
      <div class="container">
      <div class="box">
          <div class="part1">
         <button type="button" class="btn btn-warning btn-lg" style="width: 200px" id="a" ><a href="hdonors.php" target="iframe_1" style="color:white">DONORS</a></button>
              <button type="button" class="btn btn-warning btn-lg"  style="width: 200px" id="b" target="iframe_1"><a href="hreceivers.php" target="iframe_1" style="color:white">RECEIVERS</a></button>
              <button type="button" class="btn btn-warning btn-lg"  style="width: 200px" id="c"><a href="hmanagers.php" target="iframe_1" style="color:white">MANAGERS</a></button>
         
          </div>
          <div class="part2">
              <br>
              <br>
          <iframe src="hdonors.php" width="800px" height="500px" name="iframe_1" scrolling="yes"  id="d">
              
              
              </iframe>
          </div>
          
          
          </div>
      </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>