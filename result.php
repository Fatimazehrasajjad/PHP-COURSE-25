<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subjects =[

    (int)$_POST['Sub1'],  
    (int) $_POST['Sub2'],
    (int) $_POST['Sub3'],
    (int) $_POST['Sub4'], 
    (int) $_POST['Sub5'],  
    (int) $_POST['Sub6'],  
    (int)$_POST['Sub7'],
    ];

    $total =array_sum($subjects);
    $max_total = 7*100;
    $percentage = ($total/ $max_total) *100;
    if($percentage >= 80) $grade = "A+";
    elseif($percentage >=70) $grade = "A";
    elseif($percentage >=60) $grade = "B";
    elseif($percentage >=50) $grade = "C";
    else                     $grade = "Fail";
} else{
    echo "Please submit the form";
    exit;
}

?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet Result</title>
<style>
 .table-container {
  width: 80%;         /* ya 60% ya jitna chahen */
  margin: 30px auto;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  overflow: hidden;
}

</style>
   
    
 </head>
 <body>

<h2 style="text-align:center;">Student Marksheet</h2>
<table border= "1" cellpadding = "5" cellspacing="0" style=" width:50%; margin:auto;">
    <tr><th> Roll No. </th><td> <?php echo $roll; ?> </td></tr>
    <tr><th> Name. </th><td> <?php echo $name; ?> </td></tr>
    <tr><th> Email. </th><td> <?php echo $email; ?> </td></tr>
     <?php 
      for ($i = 1; $i <= 7; $i++) {
        echo "<tr><th>Subject $i Marks</th><td>" . $subjects[$i-1] . "</td></tr>";
      }
    ?>
    <tr><th>Total Marks</th><td><?php echo $total . " / " . $max_total; ?></td></tr>
    <tr><th>Percentage</th><td><?php echo round($percentage, 2); ?>%</td></tr>
    <tr><th>Grade</th><td><?php echo $grade; ?></td></tr>
  </table>


 </body>
 </html>