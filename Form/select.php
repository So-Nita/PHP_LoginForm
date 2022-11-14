<?php
    include './connectDatabase.php';
    $select = "SELECT email FROM user"; 
    $row = mysqli_query($connect, $select);
    $emailN = "sonita@gmail.com";
    if(isset($row) && mysqli_num_rows($row)>=1){
        $result = mysqli_fetch_assoc($row);
        if($result['email']==$emailN){
            echo("Have this email");
        }else{
            echo("Dont have this email");
        }
    }
?>
