<?php
session_start();
include "db_config.php";
$email = $_POST['email'];
$fullName = $_POST['fullName'];
$password= $_POST['password'];

$query = mysqli_query($con,"UPDATE users SET full_name = '$fullName', password = '$password' WHERE email = '$email' ");

if($query){
    $_SESSION['SuccessMessage'] = "Information Updated Successfully";
    header('location:../profile.php');
}
else{
    $_SESSION['ErrorMessage'] = "Failed to update profile";
    header('location:../profile.php');

}
?>