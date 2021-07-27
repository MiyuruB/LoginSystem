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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
        <a class=\"nav-link active\" aria-current=\"page\" href=\"login.php\">Sign up</a>
      </li>";
        }
        ?>

      </ul>
    </div>
  </div>
</nav>
<section class = "index-intro">
<style>
.welcome{
    color:  #000000	;
    text-align: center;
    text-shadow:2px 2px 4px black;
    background: ;
    padding: 10px;
    font-size: 300%;
}
</style>
<?php
        if (isset ($_SESSION["useruid"])){
          echo  "<p class = 'welcome' > Welcome to home page " . $_SESSION["useruid"] . "</p>";
       
        }

        ?> 


</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>