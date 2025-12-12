<?php
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $name =$_POST['name'] ?? '';
$email =$_POST['email'] ?? '';
$password =$_POST['password'] ?? '';

}
else {
    header("Location:form.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>

    <style>
        body{

            font-family:'ariel','sans-serrif';
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background: #d8e7fd;

        }
        h2{
            text-align: center;
            margin-bottom:12px;
            transition:3s;
            cursor:pointer;
            color:black;
            
        }
        h2:hover{

            background-color:gray;
            border-radius:12px;
        }
        .Box{
        
            width: 350px;
            padding: 25px;
            border-radius:12px;
            background:#f4f7fdff;;
            font-size;20px;
            text-align:center;
        }

        p{
    font-size: 20px;
    margin: 8px 0;
        }
    </style>

</head>
<body>
    <div class = "Box">
        <h2>Submitted Data</h2>
        <p> <b>Name:</b> <?php echo $name; ?></p>
        <p> <b>Email:</b> <?php echo $email; ?></p>
        <p> <b>Name:</b> <?php echo $password; ?></p>


    </div>
</body>
</html>