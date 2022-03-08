<?php
//Check if button has been clicked
if (isset($_POST["add"])){
//    Start receiving data from the form
    $user1FullName = $_POST["u1_fname"];
    $user1Name = $_POST["u1_name"];
    $user1Profession = $_POST["u1_profession"];
    $user1Email = $_POST["u1_email"];
    $user1Password = $_POST["u1_pass"];
    $created = $data['created_at'];
//    Connect to the database to save
    require_once "db_connection.php";
    //    Prepare the insert query-->
    $insertQuery = "INSERT INTO `users1`(`u1_id`, `u1_fname`, `u1_name`, `u1_profession`, `u1_email`, `u1_pass`)
        VALUES (null,'$user1FullName','$user1Name','$user1Password','$user1Email','$user1Password')";
    $save = mysqli_query($connection,$insertQuery);
//    Check if saving was successful-->
    if ($save){
        echo "Successfully registered";
        header("location:profile.php");
    }else{
        echo "error";
    }
}
