<?php

$path = __DIR__ .'/profile.txt';
if(!file_exists($path)) {
echo"File doesnot exist";
}
$content =file_get_contents($path);


$handle = fopen($path , 'r');
if($handle) {
    $size = filesize($path);
 if($size > 0){
    $data = fread($handle, $size);
 } else{
    $data = "";
    while (!feof($handle)){
  $data = fgets($handle, $size);
    }
 }
 fclose($handle);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #130c0cff;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #c4babaff;
    font-family: inter;
}

.card {
    background-color: beige;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(182, 173, 173, 0.1);
}

.card h2 {
    text-align: center;
    color: #444;
    margin-bottom: 15px;
}

pre {
    background-color: #d3d3d8ff;
    padding: 15px;
    border-radius: 8px;
    white-space: pre-wrap;
    word-wrap: break-word;
    font-size: 15px;
    line-height: 1.5;
   
}
</style>
</head>
<body>

<h1>My Profile</h1>

<div class="card">
    <h2>File Get Contents Method:</h2>
    <pre><?php echo htmlspecialchars($content); ?></pre>
</div>

<div class="card">
    <h2>FOpen + FRead Method:</h2>
    <pre><?php echo htmlspecialchars($data); ?></pre>
</div>

</body>
</html>
