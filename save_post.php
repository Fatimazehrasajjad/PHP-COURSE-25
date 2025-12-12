<?php
if(isset($_POST['post'])){
    $text = trim($_POST['post']);
    if($text != ""){
        file_put_contents("post.txt", $text);      // Save post
        file_put_contents("comments.txt", "");     // Clear old comments
    }
}
header("Location: index.php");
// exit();
?>
