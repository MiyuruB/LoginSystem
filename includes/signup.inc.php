<?php

if(isset($_POST["submit"])){
    
    
   
    $name = $_POST["username"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];


    include_once   'dbh.inc.php';
    include_once 'functions.inc.php';
    
    if (emptyInputSignup($name, $email,$username, $password, $passwordrepeat) !== false) {
      header("location: ../signup.php?error=emptyinput");
      exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
      }

    if (passwordMatch($password, $passwordrepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
      }

    if (uidExists($conn, $username,$email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
      }



    createUser($conn, $name, $email, $username, $password);
    }

else {
    header("location: ../signup.php");
    exit();
}


