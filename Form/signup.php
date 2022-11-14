<?php
    session_start();
    include './connectDatabase.php';
    include './validate.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $uerName = $_POST['myName'];
        $uerEmail = $_POST['myEmail'];
        $userPassword = $_POST['myPassword'];

        if(empty($uerName) || empty($uerEmail) || empty($userPassword)){
            echo"Input all field";
        }else{
            $select = "SELECT * FROM user WHERE email = '$uerEmail'";
            $row = mysqli_query($connect, $select);
            $result = mysqli_fetch_assoc($row);
            // print_r($result);
            if(isset($result['email']) && $result['email']==$uerEmail){
                echo("This email is taken");   
            }else{
                $query = "INSERT INTO user (name, email, password) values ('$uerName',' $uerEmail','$userPassword') ";
                mysqli_query($connect, $query);
                header("location: login.php");
                die;
            }
        }
    }

    $valName = validateName(isset($_POST["myName"]) ? $_POST["myName"] : null);
    $valEmail = validateEmail(isset($_POST["myEmail"]) ? $_POST["myEmail"] : null);
    $valPass = validatePassword(isset($_POST["myPassword"]) ? $_POST["myPassword"] : null);

?>

<!DOCTYPE html>
<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
    <body>
        <div>
        <div class="d-flex justify-content-center" style="width: 400px; margin: auto; background: #f5f5f5;">
            
            <form method="post">
                <br><h3 class="text-center">Register</h3><br>
                <div>
                    <label >Username:</label>
                    <input type="text" name="myName">
                    <span class="color"><?php echo($valName) ?></span>
                </div><br>
                <div>
                    <label style="margin-right: 30px;">Email:</label>
                    <input type="email" name="myEmail" novalidate>
                    <span class="color"><?php echo($valEmail) ?></span>
                </div><br>
                <div>
                    <label >Password:</label>
                    <input type="password" name="myPassword">
                    <span class="color"><?php echo($valPass) ?></span>
                </div><br>
                <div class="text-center">
                    <a href="./login.php">Click to login</a><br><br>
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-primary" type="submit" name="submit">
                </div><br><br>
            </form>
        </div>
        </div>
    </body>
    <style>
        .color{color: red;}
        input:focus{
            outline: none;
        }
    </style>
</html>