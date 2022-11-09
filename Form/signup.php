<?php
    session_start();
    include './connectDatabase.php';
    include './validate.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $uerName = $_POST['myName'];
        $uerEmail = $_POST['myEmail'];
        $userPassword = $_POST['myPassword'];
        if(empty($uerName) || empty($uerEmail) || empty($userPassword) || is_numeric($uerName)){
            echo"Input all field";
        
        }else{
            $query = "INSERT INTO user (name, email, password) values ('$uerName',' $uerEmail','$userPassword') ";
            mysqli_query($connect, $query);
            header("location: login.php");
            die;
        }
    }
    $valName = validateName($_POST["myName"]);
    $valEmail = validateEmail($_POST["myEmail"]);
    $valPass = validatePassword($_POST["myPassword"]);

?>

<!DOCTYPE html>
<html>
    <body>
        <div class="content" style="width: 400px; margin: auto; background: #f5f5f5;">
            
            <form method="post">
                <h3>Register</h3>
                <div>
                    <label >Username:</label>
                    <input type="text" name="myName">
                    <span class="color"><?php echo($valName) ?></span>
                </div><br>
                <div>
                    <label >Email:</label>
                    <input type="email" name="myEmail" novalidate>
                    <span class="color"><?php echo($valEmail) ?></span>
                </div><br>
                <div>
                    <label >Password:</label>
                    <input type="password" name="myPassword">
                    <span class="color"><?php echo($valPass) ?></span>
                </div><br>
                <a href="./login.php">Click to login</a><br><br>
                <input type="submit" name="submit">

            </form>
        </div>
    </body>
    <style>
        .color{color: red;}
    </style>
</html>