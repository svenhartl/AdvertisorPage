<?php

  require_once 'dbconn.php';
  require_once 'functions.php';

if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    $pwd=$_POST["pwd"];
    
    if(emptyInputLogin($username,$pwd)!==false){
        header("Location: ../Oglasnik/loginpage.php?error=emptyinput");
        exit();
    }else{

    loginUser($db,$username,$pwd);
         header("Location: ../Oglasnik/login.php"); 
         exit();
    }
}