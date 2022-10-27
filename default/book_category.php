<?php include "includes/header.php";
include "php/db_config.php";

?>




<div class="container">
<div class="text-2xl font-semibold mb-3 text-black"> Browse categories </div>
          <!-- course list -->
          <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-5">

<?php 

$query = mysqli_query($con,"SELECT * FROM book_category");
if(mysqli_num_rows($query)>0){
    while($row = mysqli_fetch_assoc($query)){

?>
<a class="uk-link-reset">
    <div class="card uk-transition-toggle">
        <div class="card-media h-40">
            <div class="card-media-overly"></div>
            <img src="../assets/images/pdf.jpg" alt="">
        </div>
        <form action="book_by_category_list.php" method="GET">
         <input type="hidden" name="category" value="<?php echo $row['department'];?>">
        <div class="card-body p-4">
           <button><div class="font-semibold line-clamp-2"><?php echo $row['department'];?>
            </div>
            </button> 
        </div>
        </form>
    </div>
    </a>
<?php 
    }
}
?>
</div>
</div>

<?php include "includes/footer.php";?>