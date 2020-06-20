<!doctype html>
<html lang="en">
  <head>
      <style>
       #bb{
              background-image: url("2.jpg");
              border: 5px solid black;
          }
           #part1{
              width: 400px;
              height: 550px;
              margin-right: -120px;
          margin-top: 20px;
          margin-left: 100px;
          }
          #r{
              margin-left: 400px;
              margin-top: 10px;
          }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>register</title>
  </head>
  <body id="bb">
      <div id="part1">  
          <center><h2 style="color: red"><U>REGISTERATION</U></h2></center>
          <hr style="border:2px solid red">
          
          <form action="bregister.php" method="post">
          <div class="input-group-prepend">
              
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">BANK_ID</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="bankid" required>
                <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color: red;border:1px solid black">LOCATION</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="location" required>
            
        <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">CONTACTS</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="contacts" required>
      <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">MANAGER_SSN</span>
  </div>
              
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="mssn" required>
               <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">PASSWORD</span>
  </div>
              
  <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="password" required>
              
        <br>
         <button type="submit" class="btn btn-primary" value="submit" id="r">REGISTER</button>
          </form>
                  </div>
                  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>