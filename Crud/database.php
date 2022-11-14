<?php
    $host = "localhost:3366";
    $serverName = "root";
    $Password = "";
    $database = "crud";
    
    $connect = mysqli_connect($host,$serverName,$Password,$database) ;
    
    if(!$connect){
        echo "eorr";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@300;400&family=Exo+2&family=Hanuman&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: 'Poppins', sans-serif;
            }
            a{text-decoration: none;}
        </style>
    </head>
</html>