<?php
if (isset($_POST["log"])){
    $userEmail = $_POST["u1_email"];
    $userPassword = $_POST["u1_pass"];

    require_once "db_connection.php";
    $selectQuery = "SELECT * FROM `users1` WHERE u1_email='$userEmail'&& u1_pass='$userPassword'";
    $result=mysqli_query($connection,$selectQuery);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        header("location:profile.php");
    }else{
        echo "Email or Password is incorrect";
    }
}

