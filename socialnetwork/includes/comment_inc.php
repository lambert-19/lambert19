<?php 
require 'functions/functions.php';
session_start();

// Establish Database Connection
$conn = connect();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST["comment_btn"])){
        //Assign values
        $comment_by     = $_SESSION['user_id'];
        $main_content   = $_POST['main_content'];

        //Insert query
        $sql8 ="INSERT INTO comment (content_comment, comment_by)
                VALUES ('$main_content','$comment_by')
                ";
        $query8=mysqli_query($conn, $sql8);
        // Action on Successful Query
         if($query8){
             $last_id = mysqli_insert_id($conn);
         }
    }
}

$commentsql =" SELECT comment.content_comment,comment.comment_time, comment.comment_by, users.user_firstname,users.user_lastname, users.user_id, users.user_gender, comment.comment_id   
                   FROM comment
                   JOIN users
                   ON comment.comment_by = users.user_id
                   WHERE users.user_id = {$_SESSION['user_id']}
                   ORDER BY comment_time DESC";
    $query99 = mysqli_query($conn, $commentsql);
    if(!$query99){
        echo mysqli_error($conn);
    }
    if(mysqli_num_rows($query99) == 0){
        echo '';
        
    }
    else{
        $width = '40px'; // Profile Image Dimensions
        $height = '40px';
        while($row = mysqli_fetch_assoc($query99)){
                include 'comment22.php';?>