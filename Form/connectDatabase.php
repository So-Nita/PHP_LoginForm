<?php
    $local = "localhost";
    $username = "root";
    $userpassword = "";
    $dbName = "loginform";
    $connect = mysqli_connect($local, $username, $userpassword, $dbName);
    if(!$connect)
    {
        die("Cannot connect ");
    }
?>