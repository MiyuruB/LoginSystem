<?php
 
include_once('dbh.inc.php');
session_start();

$_SESSION["adminid"] = "adminname";

    session_start();

    if(!isset($_SESSION["adminid"])){
      header("Location: dashboard.php");
      exit(); 
    }



if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $adminname =($_POST["adminname"]);
    $password = ($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->get_result();
     
    foreach($users as $user) {
         
        if(($user['adminname'] == $adminname) &&
            ($user['adminpassword'] == $password)) {
                header("location: ../dashboard.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
 
?>