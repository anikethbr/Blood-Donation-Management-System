<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blood';
$con = mysqli_connect($host,$user,$password,$database);
if(!$con){
    echo "Error in connecting with database";
    die();
}
session_start();
?>