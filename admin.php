<?php
session_start();
$msg="";
if(isset($_POST['log'])){
    //check password
    if (empty($_POST['password']))$msg.="Passwords cannot be empty<br>";
    if (empty($_POST['adminuser']))$msg.="User name cannot be empty<br>";

    


        //db operations
    if($msg==""){
        try{
            
        //connect to db

   $db = new PDO('mysql:host=localhost;dbname=admin_login', 'root','');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        
        //check for a user
        $p = $db->prepare("SELECT `admin_id`,`admin_name`,`admin_password` FROM `loginforms` WHERE `admin_password`=?");
            $p->execute([$_POST['adminuser']]);
        
        if($p->rowCount()>0){
            if($result=$p->fetch()){
                $PASSWD = password_verify($_POST['password'],$result['admin_password']) ? TRUE : FALSE;
                if($PASSWD){
                  
                    $_SESSION['admin_name']=$result['admin_name'];
                    $_SESSION['admin_password']=$result['admin_password'];
                    header("Location:login.php");
                }else $msg.="Password is incorrect";
            }else $msg.="There is no account associated with this usernamed";
        }else $msg.="Username you entered is not registered";
        
        }catch(PDOException $e){
            $msg.=$e->getmessage();
        }

    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Login |</title>

  </head>
  <body>
  <div id="msg" class="err">
            <?php if($msg!="") echo $msg; ?>
        </div>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="./img/adminimg.png" class="img-fluid"  alt="image">
            </div>
        <div class="col-md-6">
            <h3 class="signin-text mb-5">Admin Log-in</h3>
              
            <form class="form" action=""  method="POST">
              <div class="form-group mb-3">
                  <label for="email">Username</label>
                  <input type="text" class="form-control " placeholder="" name="adminuser" value="<?php echo $_POST['adminuser'] ?? '';?>">
              </div>
              <div class="form-group mb-3">
                <label for="passsword">Password</label>
                <input type="password" class="form-control" placeholder="" name="password" value="<?php echo $_POST['password'] ?? '';?>">
            </div>
       
            <button class="btn btn-class mt-5" name="log">Login</button>
          </form>
       
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>