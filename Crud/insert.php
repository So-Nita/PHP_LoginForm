<?php
    session_start();
    include './database.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $stdName = $_POST['stuName'];
        $stdEmail = $_POST['stuEmail'];
        
        if(empty($stdName) || empty($stdEmail)){
            echo("Input all field");
        }else{
            $insert = "INSERT INTO students (id,name,email) VALUES (NULL,'$stdName','$stdEmail')";
            mysqli_query($connect,$insert);
            header("location: homepage.php");
        }
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="h-100 w-100 d-flex align-items-center mt-5">

            <form class="w-50 m-auto bg-light p-5" method="post"> 
                <h3 class="text-center text-secondary">Add student</h3>

                <div class="">
                    <label for="name">Student Name:</label>
                    <input class="form-control" type="text" placeholder="Name" name="stuName" >
                </div>
                <div class="my-3">
                    <label for="name">Student Email:</label>
                    <input class="form-control" type="email" placeholder="Email" name="stuEmail" >
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-primary" type="submit" name="insert" onclick="return reload()">
                </div>
            </form>
        </div>
        
        <script>
            const reload=()=>{
                alert("Your data is saved");
                return true;
            }
        </script>
    </body>
    
</html>