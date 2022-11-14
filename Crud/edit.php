<?php
    include './database.php';
    
        if(isset($_GET['ID'])){
            $ID = $_GET['ID'];

            $select = "SELECT * FROM students where id = $ID";
            $result = mysqli_query($connect,$select);
            // print_r($result);
            if(mysqli_num_rows($result)>=1){
                $row= mysqli_fetch_assoc($result);
                // print_r($row);
            }
        }

        if($_SERVER['REQUEST_METHOD']="POST"){
            $stdName = isset($_POST['stuName'])? $_POST['stuName'] : null;
            $ID = isset($_POST['id']) ? $_POST['id'] : null;
            $stdEmail = isset($_POST['stuEmail']) ? $_POST['stuEmail'] : null;

            $update = "UPDATE `students` SET `name`='$stdName',`email`='$stdEmail' WHERE `id`='$ID'";
            mysqli_query($connect,$update);
            
        }
        // header('location: homepage.php');

    
?>
<!DOCTYPE html>
<html>
    <body>
    <div class="h-100 w-100 d-flex align-items-center mt-5">

        <form class="w-50 m-auto bg-light p-5" method="POST"> 
            <h3 class="text-center text-secondary">Add student</h3>

            <div class="">
                <label for="name">Student Name:</label>
                <input class="form-control" type="text" name="id" value="<?php echo $row['id']?>">
            </div>
            <div class="">
                <label for="name">Student Name:</label>
                <input class="form-control" type="text" name="stuName" value="<?php echo $row['name']?>">
            </div>
            <div class="my-3">
                <label for="name">Student Email:</label>
                <input class="form-control" type="email" name="stuEmail" value="<?php echo $row['email']?>">
            </div>
            <div class="d-flex justify-content-center">
                <input class="btn btn-primary" type="submit" name="submit">
            </div>
        </form>
        </div>
    </body>
</html>