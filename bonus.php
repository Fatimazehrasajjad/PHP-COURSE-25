<?php
$name =$_POST['name'];
$email =$_POST['email'];
$contact=$_POST['contact'];
$department=$_POST['department'];
$salary =$_POST['salary'];
$bonus =0;


if($salary < 25000) {
    $bonus = $salary *0.5;
}
elseif ($salary >= 25000 && $salary < 50000) {
    $bonus = $salary *0.10;
}
else {
    $bonus = $salary * 0.15;
}
$totalsalary =$salary + $bonus;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Bonus Table</title>
    <style>
         body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 50px;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        background-color: #e2dbdbff;
        border-radius: 15px;
    }
    th, td {
        border: 1px solid #000;
        padding: 25px;
        text-align: center;
         font-size: 15px;

    
    }
    th {
        background-color: #4a90e2;
        color: white;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    h1{
        font-family: 'Times New Roman', Times, serif;
        
    }
    
    </style>
</head>
<body>
    <div style="text-align: center;">
    <h1>Employee Bonus Calculator</h1>
    <table>
<tr>

<th>Employee Name</th>
<th>Email</th>
<th>Contact</th>
<th>Department</th>
<th>Salary</th>
<th>Bonus</th>
<th>Total Salary</th>
</tr>
<tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $contact; ?></td>
    <td><?php echo $department; ?></td>
    <td><?php echo $salary; ?></td>
    <td><?php echo $bonus; ?></td>
    <td><?php echo $totalsalary; ?></td>
</tr>
</table>
</div>
    


    
</body>
</html>