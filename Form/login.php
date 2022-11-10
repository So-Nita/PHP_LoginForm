<?php
    session_start();
    include './connectDatabase.php';
    include './validate.php';

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['userName'];
        $password = $_POST['userPassword'];
        
        

        if(empty($name) || empty($password) || is_numeric($username)){
            echo("Invalid...");
        }else{
            $query = "SELECT * FROM user WHERE name = '$name' limit 1";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result)==1){
                // print_r($result);
                $user_data = mysqli_fetch_assoc($result);
                // print_r($user_data);
                if($user_data['password'] === $password){
                    $_SESSION['User'] = $name;
                    $cookie_name = $name;
                    $cookie_value = $password;
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                   
                    header("location: indexpage.php");
                }else{
                    echo("wrong password...");
                }
            }else{
                header("location: login.php");
            }
        }
    }
    $valname = validateName(isset($_POST["userName"]) ? $_POST['userName']: null);
    $valpass = validatePassword(isset($_POST["userPassword"]) ? $_POST['userPassword'] : null);
?>

<!DOCTYPE html>
<html>
    <body>
        <div class="content" style="width: 400px; margin: auto; background: #f5f5f5;">
            <form method="post">
                <h3>Login</h3>
                <div>
                    <label >Username:</label>
                    <input type="text" name="userName">
                    <span class="color"><?php echo($valname) ?></span>
                </div><br>
                <div>
                    <label >Password:</label>
                    <input type="password" name="userPassword">
                    <span class="color"><?php echo($valpass) ?></span>
                </div><br>
                <a href="./signup.php">Sign Up</a>
                <span>  Or</span>
                <a href="">Forgot Password</a><br><br>
                <input type="submit" name="submit">
            </form>
        </div>
    </body>
    <style>
        .color{color: red;}
    </style>
</html>