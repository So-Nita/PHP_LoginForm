<?php
    include './database.php';
    if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $delete = "DELETE FROM students WHERE id= '$ID'";
        mysqli_query($connect, $delete);
        
    }
    header('location: homepage.php');

?>