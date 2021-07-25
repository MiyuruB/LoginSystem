<?php

function emptyInputSignup($name, $email, $username, $password, $passwordrepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($passwordrepeat)){
        $result =  true;
    }
    else{
        $result = false;
    }
    return $result;
}


function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result =  true;
    }
    else{
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordrepeat) {
    $result;
    if($password !== $passwordrepeat){
        $result =  true;
    }
    else{
        $result = false;
    }
    return $result;
}


function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;  
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt); 
}



function createUser($conn, $name, $email, $username, $password ) {
    $sql = "INSERT INTO users(userName, userEmail, userUid, userPassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //hashing password

    $hashpwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $username, $hashpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt); 
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result =  true;
    }
    else{ 
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username); 

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdhash = $uidExists["userPassword"];
    $checkpassword = password_verify($pwd,$pwdhash);

    if ($checkpassword === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkpassword === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["useruid"] = $uidExists["userUid"];
        header("location: ../index.php");
        exit();
    }
}