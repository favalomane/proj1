<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "sano";

$connection = mysqli_connect($host,$username,$password,$db_name);
if (!$connection) {
    die("DB connection failed!!");
}else{
    mysqli_select_db($connection,$db_name);
}