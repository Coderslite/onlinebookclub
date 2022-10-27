
<?php 
    include "db_config.php";
    $path = $_GET['path'];
    $filename = $_GET['bookName'].".pdf";
    $bookId = $_GET['bookId'];
    $email = $_GET['email'];
    
    // header("Content-Type:image/gif");
    header("Content-Disposition: attachment; filename=".$filename);
    header("Cache-control: private");
    header('X-Sendfile: '.$path);
    
if(readfile($path)){
    $query = mysqli_query($con, "INSERT INTO download_list(book_id,book_name,email)VALUES('$bookId','$filename','$email')");
    if($query){
    exit;
    }
    else{
        echo "record not added";
    }

}
else{

    echo "failed to download book";
}
    ?> 