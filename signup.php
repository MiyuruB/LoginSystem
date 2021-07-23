<!doctype html>
<html lang="en">
  <head>
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
    <div class="signup-form">
      <form action="./signup.php" method="post">
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
          <input type="text" class="form-control" name="username" placeholder="Username" required="required">
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
              <i class="fa fa-lock"></i>
            </span>                    
          </div>
          <input type="text" class="form-control" name="password" placeholder="Password" required="required">
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
          <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>
          </div>
          <div class="form-group">
        <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
      </div>
      <div class="form-group">
              <button type="submit" name="signupbtn" class="btn btn-primary btn-lg">Sign Up</button>
          </div>
      </form>
    <div class="text-center">Already have an account? <a href="./login.php">Login here</a></div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>