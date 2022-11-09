<?php
    // session_start();
    function validateName($valName){
        if(isset($_POST['submit'])){
            if(empty($valName)){
                return "Name is required";
            }
            else{
                return("");
            }
        }
    }
    function validateEmail($valEmail){
        if(isset($_POST['submit'])){
            if(empty($valEmail)){
                return "Email is required";
            }
            else{
                return("");
            }
        }
    }
    function validatePassword($valPassword){
        if(isset($_POST['submit'])){
            if(empty($valPassword)){
                return "Password is required";
            }
            else{
                return("");
            }
        }
    }
     