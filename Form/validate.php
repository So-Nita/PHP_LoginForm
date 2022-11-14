<?php
    // session_start();
    function validateName($valName){
        if(isset($_POST['submit'])){
            if(empty($valName)){
                return "Name is required";
            }
            else{
                test_input($valName);
            }
        }
    }
    function validateEmail($valEmail){
        if(isset($_POST['submit'])){
            if(empty($valEmail)){
                return "Email is required";
            }
            else{
                return null;
            }
        }
    }
    function validatePassword($valPassword){
        if(isset($_POST['submit'])){
            if(empty($valPassword)){
                return "Password is required";
            }
            elseif($valPassword<4){
                return "Password must be more than 4";
            }
            else{
                test_input($valPassword);
            }
        }
    }

    function test_input($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
     