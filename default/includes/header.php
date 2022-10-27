<?php 
session_start();
include "php/security.php";
include "php/db_config.php";
$email = $_SESSION['email'];

$query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
while($row = mysqli_fetch_assoc($query)){
    $fullName = $row['full_name'];
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/explore.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2022 09:28:53 GMT -->
<head> 

    <!-- Basic Page Needs
    ================================================== -->
    <title>Online BookClub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/uikit.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>


<div id="wrapper" class="is-verticle">

<!--  Header  -->
<header uk-sticky> 
    <div class="header_inner">
        <div class="left-side">

            <!-- Logo -->
            <div id="logo">
                <a href="index.php">
                    <img src="../assets/images/logo.png" alt="">
                    <img src="../assets/images/logo-light.png" class="logo_inverse" alt="">
                    <img src="../assets/images/logo-mobile.png" class="logo_mobile" alt="">
                </a>
            </div>

            <!-- icon menu for mobile -->
            <div class="triger" uk-toggle="target: #wrapper ; cls: is-active">
            </div>

        </div>
        <div class="right-side">

            <!-- Header search box  -->
            <div class="header_search"><i class="uil-search-alt"></i> 
                <input value="" type="text" class="form-control" placeholder=" Quick search for anything.." autocomplete="off">
       
            </div>

            <div>


                 <!-- profile -->
                <a href="#">
                    <img src="../assets/images/avatars/placeholder.png" class="header_widgets_avatar" alt="">
                </a>
                <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                <ul>   
                                <li>
                                    <a href="#" class="user">
                                        <div class="user_avatar">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user_name">
                                            <div> <?php echo $fullName ; ?></div>
                                            <!-- <span> @Johnson </span> -->
                                        </div>
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                    
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                         My Account 
                                    </a>
                                </li>
        
                          
                                <li> 
                                    <hr>
                                </li>
     
                                <li> 
                             <a>
                             <form action="php/logout.php" method="POST">
                                    <button name="logout">
                                        <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                        Log Out 
</button>
                                    </form>
                             </a>
                             
                                </li>
                            </ul>
                </div> 

            </div>

        </div>
    </div>
</header>

<!-- Main Contents -->
<div class="main_content">
   