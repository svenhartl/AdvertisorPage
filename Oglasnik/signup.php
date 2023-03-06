<?php 
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $username= $_POST["username"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    $pwdrep=$_POST["pwdrep"];
    
    
    require_once 'dbconn.php';
    require_once 'functions.php';

    if(invalidSurname($surname)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=invalidsurname");
        exit();

    }
    if(invalidName($name)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=invalidname");
        exit();

    }
    if(emptyInputSignup($name,$surname,$username,$email,$pwd,$pwdrep)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=invalidsurname");
        exit();

    }
    if(invalidUid($username)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=invalidusername");
        exit();

    }
    if(invalidEmail($email)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=invalidemail");
        exit();

    }
    if(pwdMatch($pwd,$pwdrep)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=passdontmatch");
        exit();

    }
    if(uidExists($db,$username,$email)!==false){
        header("Location: ../Oglasnik/usersignup.php?error=usernametaken");
        exit();

    }

   createUser($db,$name,$surname,$username,$pwd,$email,$pwdrep,);
    
}
else{
    header("Location: ../Oglasnik/usersignup.php");
    exit();
}

?>    