<?php include "includes/header.php" ;
include "php/session.php";

?>

<div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
              <form class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md" method="POST" action="php/update.php">
              <?php echo ErrorMessage();
        echo SuccessMessage(); 
        
        include "php/db_config.php";
        $email = $_SESSION['email'];
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
        $row = mysqli_fetch_assoc($query);
        ?>
                  <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Update Information</h1>

                      <div>
                          <label class="mb-0" for="first-name"> Full Name </label>
                          <input type="text" value="<?php echo $row['full_name'];?>" name="fullName"  id="first-name" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                      </div>
           
                  <div>
                      <label class="mb-0" for="email"> Email Address </label>
                      <input type="email" name="email" value="<?php echo $row['email'];?>" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required disabled>
                      <input type="hidden" name="email" value="<?php echo $row['email'];?>" id="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                  </div>
                  <div>
                      <label class="mb-0" for="password"> Password </label>
                      <input type="text" name="password" value="<?php echo $row['password'];?>" id="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full" required>
                  </div>
                  <div>
                      <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                          Update Now</button>
                  </div>
              </form>
                            </div>
<?php include "includes/footer.php" ?>