<?php
include "db_config.php";
$bookId = $_POST['bookId'];
$email = $_POST['email'];
$comment = $_POST['comment'];
// $date = $_POST['date'];
$date = date("l jS \of F Y");

$query = mysqli_query($con,"INSERT INTO comments(book_id,comment,senderEmail,date)VALUES('$bookId','$comment','$email','$date')");

if ($query){
    // $data = array(
    //     "status"=>true,
    //     "message"=>"comment added successfully"
    // );
    header('location:../book_detail.php?bookId='.$bookId);
}

else{
    // $data = array(
    //     "status"=>false,
    //     "message"=>" failed to add comment added"
    // );
    header('location:../book_detail.php?bookId='.$bookId);


}

// header('content-Type: application/json');
// echo json_encode($data);

?>