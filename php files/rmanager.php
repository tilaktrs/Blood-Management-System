<!doctype html>
<html lang="en">
  <head>
      <style>
      
      
      
      #part2{
              width: 400px;
              height: 600px;
              margin-right: -120px;
          margin-top: 20px;
          margin-left: 100px;
          }
          
       #bb{
              background-image: url(2.jpg);
              border: 5px solid black;
          }
      
      
      
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>REGISTERATION FORM</title>
  </head>
  <body id="bb">
      <center><h1  style="color:white">REGISTERATION FORM</h1></center>
      <div id="part2">
      <form action="mregister.php" method="post">
      <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">SSN</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="ssn" required>
                    <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color: red;border:1px solid black">HOSPITAL ID</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="hospitalid" required> 
                <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color: red;border:1px solid black">BANK ID</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="bankid" required>
            <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">NAME</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" required>
        <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">CITY</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="city" required>
      <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" style="color:red;border:1px solid black">CONTACT</span>
  </div>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="contact" required>
        <br>
        
                  
                      <center> <button type="submit"  value="submit" class="btn btn-primary" id="button">REGISTER</button></center>
          </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>