<?php
require '../functions/functions.php';
$conn = connect();
session_start(); 


if(isset($_POST['comment_load_data'])){
    
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
                include 'comment.php';?>






        <?php }
    }
    
    
    
    
    
//    $sql_comment2 ="SELECT * FROM comment";
//    $query_comment2 = mysql_query($conn,$sql_comment2);
//    
//    $array_result = [];
//    
//    if (mysql_num_rows($query_comment2)>0){
//        
//        foreach ($query_comment2 as $row){
//            
//            $comment_by = $row['comment_by'];
//            $sql_user2 ="SELECT * FROM users WHERE id='$comment_by' LIMIT 1";
//            $query_user2 = mysql_query($conn,$sql_user2);
//            $user_result = mysql_fetch_array($ $query_user2);
//            
//            array_push($array_result,['cmt'=>$row, 'user'=>$user_result]);
//        }
//        header('Content-type: applicatio/json');
//        echo json_encode($array_result);
//        
//    }else{
//        echo 'Give a comment';
//    }
}






if (isset($_POST['add_comment'])){
    
    $content_comment = $_POST['content_comment'];
    $user_id = $_SESSION['user_id'];
    
    $sql_comment = "INSERT INTO comment(comment_by, content_comment, comment_time)
                  VALUES('$user_id','$content_comment', NOW()) ";
    $query_comment = mysqli_query($conn, $sql_comment);
    
    if ($query_comment){
        echo 'comment succes';
    }else{
        echo 'comment not added';
    }
}
