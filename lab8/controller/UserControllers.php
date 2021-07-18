<?php
    include 'model/db_config.php';
    $name = "";
    $err_name = "";
    $uname = "";
    $err_uname = "";
    $email = "";
    $err_email = "";
    $pass = "";
    $err_pass = "";
    $err_db = "";
    $hasError = false;

 
    if(isset($_POST["btn_login"])){
        if(empty($_POST["uname"])){
            $hasError =  true;
            $err_uname = "Username Required";
        }
        else{
            $uname = $_POST["uname"];
        }
        if(empty($_POST["pass"])){
            $hasError =  true;
            $err_pass = "Password Required";
        }
        else{
            $pass = $_POST["pass"];
        }
        if(!$hasError){
            if(authenticateUser($uname,$pass)){
                header("Location: addcategory.php");
            }
            $err_db = "Username password invalid";
        }
    }

   
    function authenticateUser($uname,$pass){
        $query = "select * from users where uname = '$uname' and pass = '$pass'";
        $rs = get($query);
        if(count($rs) > 0){
            return true;
        }
        return false;
    }
?>