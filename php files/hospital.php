<?php
 session_start(); 

?>
<!doctype html>
<html lang="en">
  <head>
      <style>
        #image{
              background-image: url(hospital2.jpg);
            /*filter: blur(0px);
  -webkit-filter: blur(0px);
*/

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
         
          }
          #carouselExampleIndicators{
              z-index: -1;
          }
          
          
          h1{
              margin-left: 300px;
              color:red;
          }
          .container{
              display: flex;
              z-index: 2;
          }
          .box{
              display:flex;
              width:1100px;
              height:600px;
              justify-content: space-around;
          }
          #box2{
              display: flex;
              justify-content: space-around;
              width: 800px;
              height: 400px;
              
          }
          #part3{
              
              width: 600px;
              height: 400px;
              margin-top: 10px;
              display: inline;
              border: 3px solid white;
          }
          #part2{
            
              width: 300px;
              height: 600px;
              border-left: 2px solid white;
              padding: 5px;
              
          }
          #form{
              margin-left: 10px;
          }
          #im{
              margin-top: 5px;
              margin-right: 10px;
              width: 100px;
              height: 100px;
              float: left;
              margin-left: 10px;
                  
        
            
        
          }
          #c,#d{
              
              margin-top: 30px;
              font-size: 30px;
          }
          #signup{
              color: aliceblue;
          }
      
      
      
      
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>hospital</title>
  </head>
  <body >
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PRIVATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="suk.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hospital.php">HOSPITAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bank.php">BLOOD BANK</a>
      </li>
     
    </ul>
      
  </div>
          
</nav>
      <div id="image">
    <div class="container">
      <div class="box">
        <div id="part1">
            <h1>SU-KHOON</h1>
            <br>
            <br>
            <h2>A BLOOD BASED MANAGEMENT ORGANISATION</h2>
            <div id="box2">
            <div id="part3">
             <p>
                 <img src="images.png" id="im">Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. A blood bank is a place designed especially for the storage of blood and blood products. The term "blood bank" typically refers to a division of a hospital
                 laboratory where the storage of blood product occurs and where proper testing is performed to reduce the risk of transfusion related events. Large coolers hold these products at a constant temperature and they are available at a moment's notice. The blood bank management information system offers functionalities to quick access to donor records collected from various parts of the country. It enables monitoring of the results and performance of the blood donation activity such that relevant and measurable objectives of the organization can be checked.
                 Project Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle-free and corruption-free and make the system of blood bank management effective.
                 </p>
                <p></p>

                </div>
            </div>
          
          </div>
        <div id="part2">
            <br>
            <br>
            <center><h2 style="color: red">SU-KHOON</h2></center>
            <B><hr style="border:2px solid white"></B>
          <div>
              <form action="validation2.php" method="post" id="form">
            <label style="color: black"><U>USER ID</U></label>
            <input type="text" placeholder=" enter username" name="username" style="margin-left: 35px;">
              <br>
              <br>
            <label style="color: black"><U>PASSWORD</U></label>
              <input type="password" placeholder="enter password"  name="password" style="margin-left: 10px">
              <br>
              <br>
              <br>
              
            <button type="submit" class="btn btn-success" style="margin-left: 10px"  id="bt1">LOGIN</button>
<button type="button" class="btn btn-danger" style="margin-left: 100px;"><a href="rhospital.php"  style="color: aliceblue">SIGN UP</a></button>
</form>            
            <hr style="border:2px solid black">
              <p style="font-size: 15px ; color:red;border: 2px solid black;padding:10px;margin-left: 10px;" >
                  ONLY HOSPITALS AND ANY BLOOD BANKS ARE ALLOWED TO LOGIN HERE .<br>
              IF ANY NEW HOSPITAL OR A BLOOD BANK IS SIGNING UP FOR THE FIRST TIME ,MAKE SURE YOU SIGN UP WITH A HOSPITAL ID OF YOUR OWN AND ALSO THE ORGANSITION NEED TO HAVE A MANAGER APPOINTED.
            </p>
            
            </div>
          
          
          </div>
        
        
        
        
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