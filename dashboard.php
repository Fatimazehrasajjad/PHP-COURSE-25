<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("location: ../login.php ");
    exit();
}
?>

<div class="container">
    <h2><span>Welcome</span> Fatima</h2>
    <a href="logout.php" class="logout">Logout</a>
</div>

<style>
.container {
    display: flex;
    flex-direction: column;   /* Neeche lane ke liye */
    justify-content: center;  /* Vertical center */
    align-items: center;      /* Horizontal center */
    height: 100vh;            /* Page ke center me */
    background: #d6e4f8;
    font-family: Arial, sans-serif;
}

.logout {
    margin-top: 20px;          /* Thoda gap upar se */
    text-decoration: none;
    font-size: 20px;
    color: #007bff;
}
h2 {
    font-family:'Montserrat';
}
h2 span{
    transition:3s;
}
</style>


