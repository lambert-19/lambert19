<?php 
require '../functions/functions.php';
$conn = connect();
$postid = $_GET['id'];

    
$sql17="DELETE FROM posts WHERE post_id = $postid limit 1";
mysqli_query($conn, $sql17);

 header("Location: ../home.php");
