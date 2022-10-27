<?php
session_start();
include "db_config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' && password = '$password'");
if(mysqli_num_rows($query)==1){
    // $data = array(
    //     "status"=>true,
    //     "message"=>"login successful"
    // );
    $_SESSION['email'] = $email;
    header('location:../index.php');

}
else{
$_SESSION['ErrorMessage'] = "Email or password not correct";
header('location:../login.php');

}


?>