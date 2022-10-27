<?php 
include "php/db_config.php";
include "includes/header.php"; ?>


   <!-- Slideshow -->
   <div class="uk-position-relative uk-visible-toggle overflow-hidden lg:-mt-20" tabindex="-1"
              uk-slideshow="animation: scale ;min-height: 200; max-height: 450 ;autoplay: t rue">

              <ul class="uk-slideshow-items rounded">
                  <li>
                      <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                          <img src="../assets/images/hero-1.jpg" class="object-cover" alt="" uk-cover>
                      </div>
                      <div class="container relative md:p-20 md:mt-7 p-5 h-full"> 
                        <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3">
                            <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose from 130,000 online video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,50" href="#" class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get Started </a> 
                        </div>
                      </div>
                  </li> 
                  <li>
                    <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                        <img src="../assets/images/hero-2.jpg" class="object-cover" alt="" uk-cover>
                    </div>
                    <div class="container relative md:p-20 md:mt-7 p-5 h-full"> 
                        <div uk-slideshow-parallax="scale: 1,1,0.8" class="flex flex-col justify-center h-full w-full space-y-3">
                            <h1 uk-slideshow-parallax="y: 100,0,0" class="lg:text-4xl text-2xl text-white font-semibold"> Learn from the best</h1>
                            <p uk-slideshow-parallax="y: 150,0,0" class="text-base text-white font-medium pb-4 lg:w-1/2"> Choose from 130,000 online video courses with new additions published every month </p>
                            <a uk-slideshow-parallax="y: 200,0,0" href="#" class="bg-opacity-90 bg-white py-2.5 rounded-md text-base text-center w-32"> Get Started </a> 
                        </div>
                      </div>
                </li> 
              </ul>

              <ul class="uk-slideshow-nav uk-dotnav absolute bottom-0 left-0 m-7 lg:flex hidden"></ul>
            </div> 
            
<div class="container">
                <!--  episcodes  -->
                <!-- this is user toggle media to remove unwanted class for small devices more check docs uikit on https://getuikit.com/docs/toggle. -->
                    <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">
  
  <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4"> Recommended Books </h4>

  <div class="relative -mx-1" uk-slider="finite: true">

        <div class="uk-slider-container md:px-1 px-2 py-3">
          <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid">
          <?php 

$query = mysqli_query($con,"SELECT * FROM books WHERE recommended = '1'");
if(mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_assoc($query)){
?>
          <li>
          <a href="book_detail.php?bookId=<?php echo $row['id'];?>" class="uk-link-reset">
                            <div class="card uk-transition-toggle">
                                <div class="card-media h-40">
                                    <div class="card-media-overly"></div>
                                    <img src="../assets/images/pdf.jpg" alt="" class="">
                                </div>
                                <div class="card-body p-4">
                                    <div class="font-semibold line-clamp-2"><?php echo $row['book_name'];?>
                                    </div>
                                    <div class="flex space-x-2 items-center text-sm pt-3">
                                        <div><em>by <?php echo $row['book_author'];?></em> </div>
                                        <!-- <div>·</div>
                                        <div> lec 4 </div> -->
                                    </div>
                                    <div class="pt-1 flex items-center justify-between">
                                        <div class="text-sm font-semibold"> Download </div>
                                    </div>
                                </div>
                            </div>
                        </a>
              </li>
              <?php }
            }
            else{
                echo "<li>no recommended book yet</li>";
            }
            ?>
          </ul>

          <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline"></ion-icon> </a>
          <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline"></ion-icon></a>

        </div>

  </div>

</div>




<div class="md:flex justify-between items-center mb-8 pt-4 border-t">

<div>
    <div class="text-xl font-semibold"> Latest Books </div>
    <div class="text-sm mt-2 font-medium text-gray-500 leading-6">  Choose from +10.000 courses with new  additions published every months  </div>
</div>

<div class="flex items-center justify-end">

    <div class="bg-gray-100 border inline-flex p-0.5 rounded-md text-lg self-center">
        <a href="courses-list.html" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="List view"> 
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg> 
        </a>
        <a href="#" class="py-1.5 px-2.5 rounded-md bg-white shadow" data-tippy-placement="top" title="Grid view"> 
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
        </a>
    </div>
    <a href="#" class="bg-gray-100 border ml-2 px-3 py-2 rounded-md" data-tippy-placement="top"  title="Filter" uk-toggle="target: #course-filter;flip: true"> 
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path></svg>
    </a>

</div>
</div>

               
                    <!-- course list -->
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-5">

                        <?php 

                        $query = mysqli_query($con,"SELECT * FROM books");
                        if(mysqli_num_rows($query)>0){
                            while($row = mysqli_fetch_assoc($query)){

                        ?>
                        
                        <a href="book_detail.php?bookId=<?php echo $row['id'];?>" class="uk-link-reset">
                            <div class="card uk-transition-toggle">
                                <div class="card-media h-40">
                                    <div class="card-media-overly"></div>
                                    <img src="../assets/images/pdf.jpg" alt="" class="">
                                </div>
                                <div class="card-body p-4">
                                    <div class="font-semibold line-clamp-2"><?php echo $row['book_name'];?>
                                    </div>
                                    <div class="flex space-x-2 items-center text-sm pt-3">
                                        <div><em>by <?php echo $row['book_author'];?></em> </div>
                                        <!-- <div>·</div>
                                        <div> lec 4 </div> -->
                                    </div>
                                    <div class="pt-1 flex items-center justify-between">
                                        <div class="text-sm font-semibold"> Download </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php 
                            }
                        }
                        ?>
                    </div>
                    <div class="mt-5"></div>

                    <a href="https://activeglobalfx.com/e-library/books/<?php echo $row['book_url'];?>" class="bg-blue-600 block py-3 rounded-md text-white text-center text-base font-semibold hover:text-white hover:bg-red-700">View All </a>

                    <!-- Pagination -->
                    <!-- <div class="flex justify-center mt-9 space-x-2 text-base font-semibold text-gray-400 items-center">
                        <a href="#" class="py-1 px-3 bg-gray-200 rounded text-gray-600"> 1</a>
                        <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 2</a>
                        <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 3</a>
                        <ion-icon name="ellipsis-horizontal" class="text-lg -mb-4"></ion-icon>
                        <a href="#" class="py-1 px-2 bg-gray-200 rounded"> 12</a>
                    </div> -->
</div>




<?php include "includes/footer.php"; ?>