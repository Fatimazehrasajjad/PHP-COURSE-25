<?php
session_start();
session_unset();
session_destroy();

echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout Page</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background: #d6e4f8;
        font-family: Arial, sans-serif;
    }

    h2 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
        color: #2e2e2e;
    }
</style>

</head>
<body>

<h2>You are logged Out!<br>After 2 seconds it will redirect to Login Page.</h2>

</body>
</html>
';

header("refresh: 2; url=login.php");
exit();

?>
