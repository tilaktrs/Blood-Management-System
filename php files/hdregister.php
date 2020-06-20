<!doctype html>
<html lang="en">
  <head>
      <style>
          #bb{
              background-image: url(2.jpg);
              border: 5px solid black;
          }
          .container{
              display: flex;
          }
          .box{
              padding-left:30px;
              width: 1100px; 
              height: 700px;
              display: flex;
              justify-content: space-around;
          }
      
          #part1{
              width: 400px;
              height: 600px;
              margin-left: -130px;
              margin-right: 0px;
          }
          #part2{
              width: 400px;
              height: 600px;
              margin-right: -120px;
          }
          input{
              border: 2px solid red;
          }
          #button{
              margin-top: 500px;
              margin-left: 140px;
          }
      
      
      
      
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>REGISTER</title>
      <script>
    
    function getalert(){
        alert('DONOR ADDED SUCCESSFULLY!');
    }
      </script>
      
  </head>
  <body id="bb">
      
      <form action="hidonor.php" method="post">
          <div class="container">
              <div class="box">
                  
      <div id="part1">  
          <center><h2 style="color: red"><U>REGISTERATION</U></h2></center>
          <hr style="border:2px solid red">
          
          <label style="color:red">NAME:</label>
          <input type="text" placeholder="enter name"  name ="name" style="margin-left: 115px; width: 200px;" required><br><br>
          <label style="color:red">BLOOD GROUP:</label>
          <input type="text" placeholder="enter blood group" name="bgroup"  style="margin-left:50px;width: 200px;" required><br><br>
          <label style="color:red">ENTER CITY:</label>
          <input type="text" placeholder="enter city"  name="city" style="margin-left:76px;width: 200px;" required><br><br>
          <label style="color:red">PHONE NO:</label>
          <input type="number" placeholder="enter phone no."  name="phone" style="margin-left:77px;width: 200px;" required><br><br>
          <label style="color:red">HOSPITAL NAME:</label>
          <input type="text" placeholder="hospitalname" name="hospitalid" style="margin-left:35px;width: 200px;" required><br><br>
          <label style="color:red">HOSPITAL ID:</label>
          <input type="text" placeholder="enter hospitalid" name="hospitalid" style="margin-left:70px;width: 200px;" required><br><br>
          <label style="color:red">HOSPITAL NAME:</label>
          <input type="text" placeholder="enter hospital name" name="hname" style="margin-left:40px;width: 200px;" required><br><br>
              <label style="color:red">BLOODBANK ID:</label>
              <input type="text" placeholder="enter bank_id" name="bankid" style="margin-left:50px;width: 200px;" required><br><br>
          <label style="color:red">PASSWORD:</label>
          <input type="password" placeholder="enter password" name="password" style="margin-left:75px;width: 200px;" required><br><br>
          <label style="color:red">LAST DONATED ON:</label>
          <input type="date" placeholder="enter date"  name="date" style="margin-left:20px;width: 200px;" required><br>
          <br>
              </div>
                  
                  
    <div id="part2">
            <center><h2 style="color: red"><U>EDIT-INFO</U></h2></center>
        <hr style="border:2px solid red">
        <br>     
                   <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">DONOR_ID</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="donorid" required>
                    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color: red;border:1px solid black">HEIGHT</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="height" required> 
                <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color: red;border:1px solid black">WEIGHT</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="weight" required>
            <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">AGE</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="age" required>
        <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">GENDER</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="gender" required>
        <br>
                  </div>
                      <center> <button type="submit"  value="submit" class="btn btn-primary" id="bt1"      onclick="getalert()">REGISTER</button></center>
                  
                  </div>
              
          </div>
          </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>