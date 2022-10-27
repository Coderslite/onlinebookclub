<?php
session_start();
include "db_config.php";
$email = $_POST['email'];
@$password =  $_POST['password'];
@$fullName = $_POST['full_name'];
@$department = $_POST['department'];



$checkEmail = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
$num = mysqli_num_rows($checkEmail);
if($num>0){
    // $data = array(
    //     "status"=>false,
    //     "message"=>"email already exist"
    // );
$_SESSION['ErrorMessage'] =  "Email Already Exist";
header('location:../register.php');


}

    else{
        $query = mysqli_query($con,"INSERT INTO users (full_name,email,password,department,status,role)VALUES('$fullName','$email','$password','$department','active','user')");

        if($query){
            // $_SESSION['ErrorMessage'] =  "Registrat";$
            $_SESSION['email'] = $email;
            header('location:../index.php');

            }
            else{
                $_SESSION['ErrorMessage'] =  "Failed to register";
                header('location:../register.php');


            }
         } 

    header('content-Type: application/json');
    echo json_encode($data);

?>