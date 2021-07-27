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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/signupcss.css">
    <title>Sign Up!</title>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" >Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 
    <div class="signup-form">
      <form action="includes/signup.inc.php" method="post">
      <h2>Sign Up</h2>
      <p>Please fill in this form to create an account!</p>
      <hr>
          <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <span class="fa fa-user"></span>
            </span>                    
          </div>
          <input type="text" class="form-control" name="username" placeholder="Full Name" required="required">
        </div>
          </div>
          
          <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-paper-plane"></i>
            </span>                    
          </div>
          <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>
          </div>

          <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <span class="fa fa-user"></span>
            </span>                    
          </div>
          <input type="text" class="form-control" name="uid" placeholder="Username" required="required">
        </div>
          </div>
          


      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-lock"></i>
            </span>                    
          </div>
          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
          </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-lock"></i>
              <i class="fa fa-check"></i>
            </span>                    
          </div>
          <input type="password" class="form-control" name="passwordrepeat" placeholder="Confirm Password" required="required">
        </div>
          </div>
          <div class="form-group">
        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
      </div>
      <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
          </div>
      </form>


<style>
.mycss{
    color: red;
    text-align: center;
    border:1px solid #000;
    background: #FFFFFF;
    padding: 10px;
}
</style>
      <?php
  if (isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p class='mycss'>Fill all the fields.</p>";
    }
    else if ($_GET["error"] == "invalidemail"){
      echo "<p class='mycss'>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch"){
      echo "<p class='mycss'>Password doesn't match!</p>";
      }
    else if ($_GET["error"] == "stmtfailed"){
      echo "<p class='mycss'>Something went wrong!</p>";
        }
    else if ($_GET["error"] == "usernametaken"){
      echo "<p class='mycss'>Username is taken!</p>";
          }
      }
?>

    <div class="text-center">Already have an account? <a href="./login.php">Login here</a></div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>