<?php
if (isset($_POST['login'])){
    $userName = $_POST["uname"];
    $userPassword = $_POST["pass"];

    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM `admin` WHERE u_name='$userName'&& password='$userPassword'";
    $result=mysqli_query($connection,$selectQuery);
    if (!$result){
        echo "Error";
    }else{
        header("location:");
    }

}