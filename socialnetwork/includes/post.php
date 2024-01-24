<?php
echo '<div class="post">';
if ($row['post_public'] == 'Y') {
    echo '<p class="public">';
    echo 'Public';
} else {
    echo '<p class="public">';
    echo 'Private';
}
if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === $row['post_by']) {
?>
    <a href="includes/delete_post.php<?php echo '?id=' . $row['post_id'] ?>" title="Delete your post"><button class="but22" type="button">X</button></a>
<?php
} else {
    echo '<button class="but22" type= "button">X</button>';
}
echo '<br>';
echo '<span class="postedtime">' . $row['post_time'] . '</span>';
echo '</p>';

echo '<div>';
include 'profile_picture.php';
echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] . '">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>';
echo '</div>';
echo '<br>';
echo '<p class="caption">' . $row['post_caption'] . '</p>';
echo '<center>';
$target = glob("data/images/posts/" . $row['post_id'] . ".*");
if ($target) {
    echo '<img src="' . $target[0] . '" style="max-width:580px">';
    echo '<br><br>';
}
echo '</center>';



?>

<div class="user-comment">
    <form id="comment_form" name="comment_form" action="comment_inc.php" method="post">
        
        <div>
            <textarea name="comment_text" id="comment_text" class="comment_textbox" maxlength="150" rows="2" cols="60" placeholder="add comment"></textarea>
        </div>
        <div>
            
            
            <button type="submit"  name="comment_btn" id="comment_submit" class="add_comment_button style_button">Comment</button>
        </div>
    </form>
</div>


    
<?php echo '</div>' ?>
    
<?php



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






        <?php }
    }
    
    

?>		
			  
    
    
   
       
<!--        <div class="post post1">
            <div id="comments-wrapper">   
                <div class="comment-user1">
                     reply 
                    <div class="topcom">
                        <div class="propic"><?php include 'profile_picture.php'; ?></div>
                        <div class="postname"><?php echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] . '">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>'; ?></div>
                        <div class="com-time">time</div>
                    </div>
                    <div class="content">
                        
                    </div>
                    <div class="but_sub">
                    <button type="submit" class="style_button1">Reply</button>
                    </div>
                </div>
            </div>    
        </div>    
    </div>-->

                       













<?php


/*
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
    
      */

?>




<script>
    // Form Validation
    function validatePost1() {
        var required = document.getElementsByClassName("required");
        var caption = document.getElementsByTagName("textarea")[0].value;
        required[0].style.display = "none";
        if (caption == "") {
            required[0].style.display = "initial";
            return false;
        }
        return true;
    }
</script>