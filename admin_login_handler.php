<?php
session_start();
if (isset($_POST['login'])){
    $userName = $_POST["uname"];
    $userPassword = $_POST["pass"];
    $hpassword = shai($userPassword);

    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM `admin` WHERE u_name='$userName'&& password='$userPassword'";
    $result=mysqli_query($connection,$selectQuery);
    if ($result){
        header("location:admin_dashboard.php");
        $_SESSION['username']=$userName;
    }else{
       echo "Error";
    }

}