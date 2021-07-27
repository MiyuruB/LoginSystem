<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="img/fav.png" type="image/png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Login |</title>

  </head>
  <body>
 
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./img/adminimg.png" class="img-fluid"  alt="image">
            </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-5">Admin Log-in</h3>
              
            <form class="form" action="includes/admin.inc.php"  method="POST">
              <div class="form-group mb-3">
                  <label for="email">Username</label>
                  <input type="text" class="form-control " placeholder="" name="adminname" value="<?php echo $_POST['adminuser'] ?? '';?>">
              </div>
              <div class="form-group mb-3">
                <label for="passsword">Password</label>
                <input type="password" class="form-control" placeholder="" name="password" value="<?php echo $_POST['password'] ?? '';?>">
            </div>
       
            <button class="btn btn-class mt-5" name="login">Login</button>
          </form>
       
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>