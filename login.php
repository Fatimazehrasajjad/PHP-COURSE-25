<?php
session_start();

if(isset($_POST['login'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];


if($username ==="Fatima" && $password === "123") {
  $_SESSION['user'] = $username;

   header("location: dashboard.php");
   exit();
}else{
    $error="Invalid username or password";
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>

        body{

        font-family: Ariel,Sans-serif;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        background: #f0f2f5;
        }

        .login{
          background: #fff;
          text-align:center;
          width: 350px;
          padding: 50px 20px;
          border-radius: 6px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="password"]{
            width:90%;
            border-radius:5px;
            margin:10px 0px;
            padding:10px;
            border: 1px solid #ccc;
        }

        button{
            border-radius:5px;
            padding: 18px 18px;
             border: none;
            font-size: 16px;
            color: #0f0404ff;
            cursor: pointer;
        }

        button:hover{

            background-color:gray;

        }
        h1{
            text-align:center;
            font-size: 30px;
            color: #333;
            margin-bottom: 25px;
            font-weight: 600;
            /* font-family: 'Roboto' sans-serif; */
            font-family: 'Montserrat';
            /* font-family: 'Inter'; */
        }
    </style>
</head>
<body>
    
    <form method="post" class="login">
        <h1>
            Login Register Form
        </h1>
Username: <input type="text" name ="username" required> <br> <br>
Password: <input type="password" name ="password" required> <br> <br>

<button type ="submit" name="login">Login</button>
    </form>

    <?php 
    if(isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>