<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>register level</title>
  </head>
  <body>
  
  <?php
  include 'header.php'
  ?>
  
  <form style="display: grid; justify-content: center;"  method="POST" action="cek_login.php" >
    <img src="assets/letris2.png" style="width: 300px;">
    <h1 style="text-align: center;">REGISTER</h1>

  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>

  <div class="form-group" >
    <label >Password</label>
    <input type="text" class="form-control" name="password" id="password">
  </div>
  
  <div class="form-group" >
    <label >nomer telp</label>
    <input type="text" class="form-control" name="password" id="password">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
  
</form>

 


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>