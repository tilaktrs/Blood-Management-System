<html>
<head>
    <title>BLOOD BANK</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
    
        #a{
            
            background-image: url(storage.png);
            background-size: cover;
            border: 15px  solid white;
            
        }
    
    
        .form-container{
            
          border: 2px solid blue;  
            margin-top: 132px;
        
            padding: 40px ;
            -webkit-box-shadow: 16px 20px 16px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 16px 20px 16px 0px rgba(0,0,0,0.75);
box-shadow: 16px 20px 16px 0px rgba(0,0,0,0.75);
            
        }
        
    
    
    
    
    
    </style>
    </head>
<body id="a">
    
    <div class="container-fluid bg"  >
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
         <div class="col-md-4 col-sm-4 col-xs-12">
        <!--form start-->
        <form class="form-container" action="validation3.php" method="post">
  <div class="form-group">
    <label for="exampleInputtext" style="color: white">USERNAME</label>
    <input type="text" class="form-control"  placeholder="username" name="username" >
  </div>
            <br>
            <br>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color: white">PASSWORD</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" >
  </div>
            <br>
    <button type="submit" class="btn btn-success">LOGIN</button>
            <button type="button" class="btn btn-danger" style="margin-left:  150px;"><a href="rbank.php" style="color: white">SIGN UP</a></button>
</form>
        
        
        <!--form end-->
        
        
        </div>
    
    <div class="col-md-4 col-sm-4 col-xs-12"></div>

    </div>
    </div>
    
    
    
    
    
    </body>
</html>