<?php
session_start();
include "php/session.php";
?>


<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2022 09:31:25 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link href="../assets/images/favicon.png" rel="icon" type="image/png">

  <!-- Basic Page Needs
        ================================================== -->
  <title>Courseplus Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

  <!-- icons
    ================================================== -->
  <link rel="stylesheet" href="../assets/css/icons.css">

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="../assets/css/uikit.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="../assets/unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">


  <style>
    input , .bootstrap-select.btn-group button{
        background-color: #f3f4f6  !important;
        height: 44px  !important;
        box-shadow: none  !important; 
    }
  </style>

</head>

<body>


  <div id="wrapper" class="flex flex-col justify-between h-screen">

      <!-- header-->
      <div class="bg-white py-4 shadow dark:bg-gray-800">
          <div class="max-w-6xl mx-auto">


              <div class="flex items-center lg:justify-between justify-around">

                  <a href="index.html">
                      <img src="../assets/images/logo.png" alt="" class="w-32">
                  </a>

                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                      <a href="form-login.html" class="py-3 px-4">Login</a>
                      <a href="form-register.html" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                  </div>

              </div>
          </div>
      </div>

      <!-- Content-->
      <div>
          <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
              <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" method="POST" action="php/register.php">
              <?php echo ErrorMessage();
        echo SuccessMessage(); 
        ?>
                  <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Register </h1>

                      <div>
                          <label class="mb-0" for="first-name"> Full Name </label>
                          <input type="text" placeholder="Your Name" name="full_name"  id="first-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                      </div>
           
                  <div>
                      <label class="mb-0" for="email"> Email Address </label>
                      <input type="email" name="email" placeholder="Info@example.com" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                  </div>
                  <div>
                      <label class="mb-0" for="password"> Password </label>
                      <input type="password" name="password" placeholder="******" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                  </div>
                      <div>
                          <label class="mb-0">Department </label>
                          <select class="mt-2" name="department" required>
                            <option value=""> select department </option>
                            <?php 
                            include "php/db_config.php";
                            $query = mysqli_query($con,"SELECT * FROM book_category");
                            if(mysqli_num_rows($query)>0){
                                while($row = mysqli_fetch_assoc($query)){
                                    
                    ?>
                              <option><?php echo $row['department'] ?></option>
                              <?php
                                 }
                                }
                                ?>

                          </select>

               
                  </div>

                  <div class="checkbox">
                      <input type="checkbox" id="chekcbox1" checked="">
                      <label for="chekcbox1"><span class="checkbox-icon"></span> I agree to the <a href="" target="_blank" class="uk-text-bold uk-text-small uk-link-reset"> Terms and Conditions </a>
                      </label>
                  </div>

                  <div>
                      <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                          Register</button>
                  </div>
              </form>
            <p>Already have an account ?<a href="login.php"> Login</a></p>




          </div>
      </div>
      
      <!-- Footer -->

      <div class="lg:mb-5 py-3 uk-link-reset">
          <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
              <div class="flex space-x-2 text-gray-700 uppercase">
                  <a href="#"> About</a>
                  <a href="#"> Help</a>
                  <a href="#"> Terms</a>
                  <a href="#"> Privacy</a>
              </div>
              <p class="capitalize"> © copyright 2021 by Courseplus</p>
          </div>
      </div>

  </div>

  <!-- Javascript
  ================================================== -->
  <script src="../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../../../cdn.jsdelivr.net/npm/uikit%403.7.6/dist/js/uikit.min.js"></script>
    <script src="../assets/js/uikit.js"></script>
  <script src="../assets/js/tippy.all.min.js"></script>
  <script src="../assets/js/simplebar.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/bootstrap-select.min.js"></script>
  <script src="../../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Sep 2022 09:31:25 GMT -->
</html>