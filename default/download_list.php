<?php include "includes/header.php";?>

<div class="container">
    <ul>   
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
    </ul>
</div>
<?php include "includes/footer.php";?>