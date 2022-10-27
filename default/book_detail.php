<?php 
include "includes/header.php"; 
include "php/db_config.php";
$bookId = $_GET['bookId'];
$email = $_SESSION['email'];

    $query  = mysqli_query($con,"SELECT * FROM books WHERE id = '$bookId'");
    while($row = mysqli_fetch_assoc($query)){
?>

<div class="container -mt-7 lg:mt-0">


<div class="tube-card p-6 md:m-0 -mx-5">
    
    <div class="">
    <img src="../assets/images/hero-2.jpg" alt="" class="w-100" style="width:100vw">
    </div>

    <div class="py-5 space-y-4">

        <div>
            <h1 class="lg:text-2xl text-lg font-semibold line-clamp-1"> <?php echo $row['book_name']; ?> </h1>
            <p> 60,723,169 views </p>
        </div>
        <a href="php/download.php?path=https://activeglobalfx.com/e-library/books/<?php echo $row['book_url'];?>&&bookName=<?php echo $row['book_name']?>&&email=<?php echo $email?>&&bookId=<?php echo $row['id'];?>" class="bg-red-600 block py-3 rounded-md text-white text-center text-base font-semibold hover:text-white hover:bg-blue-700">Download PDF </a>
        <div class="md:flex items-center justify-between">
            <a href="#" class="flex items-center space-x-3">
                <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full">
                <div class="">
                    <div class="text-base font-semibold"> <?php echo $row['book_author']; ?> </div>
                    <div class="text-xs"> <?php echo $row['date']; ?> </div>
                </div>
            </a>
            <div class="md:flex items-center space-x-1 md:pt-0 pt-2 hidden">
                <a href="#">  <ion-icon name="logo-twitter" class="bg-blue-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                <a href="#">  <ion-icon name="logo-youtube" class="bg-red-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                <a href="#">  <ion-icon name="logo-github" class="bg-gray-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
             </div>
        </div>
        
        <div class="text-lg font-semibold pt-2"> Description </div>
        <p id="more-veiw" class=" line-clamp-2"> <?php echo $row['description']; ?>
        </p>
        <a href="#" class="text-blue-600" uk-toggle="target: #more-veiw; cls: line-clamp-2; animation: uk-animation-fade"> 
            Read More  
        </a>

        <hr>




        <!-- Comments-->


        <?php

        $commentQuery = mysqli_query($con,"SELECT users.full_name, users.profile_pic, comments.comment, comments.date, comments.book_id FROM users, comments WHERE  comments.senderEmail = users.email  && comments.book_id = '$bookId'");

        ?>
        <div class="text-lg font-semibold pt-2"> Comments ( <?php echo mysqli_num_rows($commentQuery) ?>)</div>

        <div class="space-y-4 my-5">
        
        <?php while ($commentRow = mysqli_fetch_assoc($commentQuery)){

   ?>
            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                </div>
                <div>
                    <h4 class="text-base m-0 font-semibold"> <?php echo $commentRow['full_name']?></h4>
                    <span class="text-gray-700 text-sm">  <?php echo $commentRow['date']?></span>
                    <p class="mt-3 md:ml-0 -ml-16">
                    <?php echo $commentRow['comment']?>
                    </p>
        
        
        
                </div>
            </div>
        <?php }
        ?>
        
        </div>
        <div class="flex justify-center ">
            <!-- <a href="#" class="bg-gray-50 border hover:bg-gray-100 px-4 py-1.5 rounded-full text-sm">More Comments ..</a> -->

            <form action="php/add_comment.php" method="POST">
                <div class="form-group">
                    <textarea id="" cols="100" placeholder="Enter comment here" name="comment" class="form-control"></textarea>
                    <input type="hidden" name="bookId" value="<?php echo $bookId ?>">
                    <input type="hidden" name="email" value="<?php echo $email ?>">
                    <hr>
                </div>
                <button type="submit" class="bg-blue-600 block p-3 m-4 rounded-md text-white text-center text-base font-semibold hover:text-white hover:bg-blue-700" > Send </button>

            </form>
        </div>

</div>
    </div> 

</div>


<?php }
?>


<?php
include "includes/footer.php"; ?>

