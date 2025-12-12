<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$score = 85;
if($score >= 90){
    echo "Grade A <br>";
}
elseif ($score >= 80){
    echo "Grade B";
}

elseif ($score >= 70){
    echo "Grade C";
}

elseif ($score >= 60){
    echo "Grade D";
}
else{
    echo "Fail";
}
echo "<br>";

for ($i=0; $i<=100; $i++) {
if($i % 5 == 0) {
    echo("Total Numbers Dividible Between 1 and 5 are: $i . <br>");
}

}



?>
</body>
</html>

