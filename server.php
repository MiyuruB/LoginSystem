<?php
session_start();

//initialising variables

$username = "";
$email = "";
$errors = array();

//connect to database

$db = mysqli_connect('localhost','root','','user_logins') or die ("Could not connect to database");

//Register user
if(isset($_POST))
$username = mysqli_real_escape_string($db,$_POST['username']);
$username = mysqli_real_escape_string($db,$_POST['email']);
$username = mysqli_real_escape_string($db,$_POST['password']);
$username = mysqli_real_escape_string($db,$_POST['confirm_password']);


//validation

if(empty($username))   {array_push($errors, "Username is required"); }
if(empty($email))   {array_push($errors, "Email is required"); }
if(empty($password))   {array_push($errors, "Password is required"); }
if($password != $confirm_password) {array_push($errors, "Password do not match");}

// check db for exisiting users with same user name

$user_check_query = "SELECT * FROM user_name WHERE username = $username or email = '$email' LIMIT 1";


$results = mysqli_query($db, $user_check_query);
$user_name = mysqli_fetch_assoc($result);

if($user_name) {
    if($user_name['username'] === $username){array_push($errors,"Username already exisited");}
    if($user_name['email'] === $email){array_push($errors,"Username already exisited");}



}

//register the user if there is no errrors in the form

if (count($errors) === 0 ){

    $password = md5($password_1); // encrypt password to md5
    $query = "INSERT INTO users (user_name, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Now you are logged in";

    header('location: index.php')

}










?>