<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mini BlogApp PHP</title>
<style>

body {
            font-family: Arial, sans-serif;
            background: #fde1efff;
            padding-top: 50px;
            padding-right: 20px;
            padding-left:20px;
            padding-bottom: 50px;
            margin-top:20px;
        }

        .container {
    width: 500px;
}


            .box {
    background: #ffffff;
    padding: 20px;
    margin-bottom: 20px; /
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
        textarea {
            width: 95%;
            padding: 10px;
            border-radius: 6px;
            margin-top: 10px;
            margin-right:5px;
        }
        button {
            /* text-align:center; */
            display:block;
            margin: 15px auto 0 auto;
            margin-top: 10px;
            padding: 10px 25px;
            background: #f769bcff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 15px;
            
        }
        button:hover{
            /* color:black; */
             background: #1c2e3fff;
        }
        
        .comment {
                background: #f0bfd7ff;

            padding: 8px;
            margin-top: 15px;
            border-radius: 6px;
            margin-bottom:10px;
        }
        h2{
            text-align:center;
            font-family: Verdana, Geneva, sans-serif;
            color: #200f19d3;

        }

        h3{
            text-align: center;
            font-family: Verdana, Geneva, sans-serif;
           color: #200f19d3;

        }

    .post-card {
    background: #f0bfd7ff;
    padding: 15px;
    border-radius: 8px;
    word-wrap: break-word;
    margin-top: 20px;  
    margin-bottom: 25px; 
}

.comments-section {
    margin-top: 20px; 
}


    
</style>
</head>
<body>

<div class="box">
    <h2>Mini BlogApp (PHP)</h2>
    <form action="save_post.php" method="post">
        <textarea name="post" placeholder="What's in your mind?" required></textarea>
        <button type="submit">Post</button>
    </form>
</div>

<div class="post-card">
<?php
$post = @file_get_contents("post.txt");
if(trim($post) === ""){
    echo "<b>No Post Found!</b>";
} else{
    echo "<p>$post</p>";
}
?>
</div>

<?php if(trim($post) != ""): ?>
<div class="box">
    <h3>Add Comments here:</h3>
    <form method="post" action="save_comments.php">
        <textarea name="comment" placeholder="Write a comment..." required></textarea>
        <button type="submit">Add Comment</button>
    </form>

    <h3>Comments:</h3>
    <?php
    if(file_exists("comments.txt")){
        $comments = file("comments.txt", FILE_IGNORE_NEW_LINES);
        foreach($comments as $c){
            echo "<div class='comment'>$c</div>";
        }
    }
    ?>
</div>
<?php endif; ?>

</body>
</html>
