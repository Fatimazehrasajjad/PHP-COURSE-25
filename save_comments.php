<?php
if(isset($_POST['comment'])){
    $comment = trim($_POST['comment']);
    if($comment != ""){
        file_put_contents("comments.txt", $comment . PHP_EOL, FILE_APPEND);
    }
}
header("Location: index.php");

?>
