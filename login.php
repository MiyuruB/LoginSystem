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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.phpBudu sarna">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" >Home</a>
        </li>
        <?php
        if (isset ($_SESSION["useruid"])){
          echo   "<li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"profile.php\">Profile Information</a>
        </li>";
          echo  "<li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"includes/logout.inc.php\">Log out</a>
      </li>";
        }
        else {
        echo "<li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"login.php\">Log in</a>
        </li>";
        echo "<li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"signup.php\">Sign up</a>
      </li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./img/img1.png" class="img-fluid"  alt="image">
            </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-3">Sign In</h3>
              
          <form action="includes/login.inc.php" method="post">
              <div class="form-group mb-3">
                  <label for="username">Username</label>
                  <input type="text" class="form-control " placeholder="Enter your username" name="uid">
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="pwd">
            </div>
      
            <div class="form-group form-check">
                <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                <label class="form-check-label" for="checkbox">Remember Me</label>
            </div>
            <button class="btn btn-class mt-5" name="submitbtn">Login</button>
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
    else if ($_GET["error"] == "wronglogin"){
      echo "<p class='mycss'>Incorrect login information!</p>";
      }
    }
?>
          <div class="text-left mt-4">New user? Register now <a href="./signup.php"> Signup here</a></div>

         </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>