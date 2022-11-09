<?php
    session_start();
        include './connectDatabase.php';
        if(!isset($_SESSION['userName'])){
            header("location: login.php");
        }
       
?>
<!DOCTYPE html>
<html>
    <head>
        <h2>Hello</h2>
        <a href="./logout.php">Logout here</a>
    </head>
</html>
