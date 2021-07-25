<?php

$serverName = "localhost";
$dbUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($serverName,$dbUsername,$dBPassword,$dBName);
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

