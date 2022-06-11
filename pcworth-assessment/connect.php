<?php


$host = "localhost";
$username = "root";
$password = "123456";
$db = "assessmentdb";

$connect = new mysqli($host, $username, $password, $db);

if($connect->connect_error){
    echo $connect->connect_error;
}else{
    return $connect;
}


// DATABASSE CONNECTION