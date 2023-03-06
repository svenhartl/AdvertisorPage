<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginpagecss.css">
    <link rel="icon" type="image/x-icon" href="favicon1.ico">

    <title>Uredi profil</title>
</head>
<body>

  <?php 
  include("dbconn.php");
  include("navbar_user.php"); ?>
<div class="row">

<div class="col" style="width:20%">

 

</div>

<div class="col-mid">

    
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Uredi profil</h1>
    
<?php
 

 $loggedinuser=$_SESSION["name"];
 $lastname=$_SESSION["surname"];
 $username=$_SESSION["username"];
 $email=$_SESSION["email"];
 $userid=$_SESSION["ID"];
 
echo '<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
         
          
          
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        
        <form class="form-horizontal" role="form" method="POST" action="#">
          <div class="form-group">
            <label class="col-lg-3 control-label" >Ime:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name"  placeholder='.$loggedinuser.'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Prezime:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text"name="surname" placeholder='.$lastname.'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Korisničko ime:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="username" placeholder='.$username.'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">E-mail:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" placeholder='.$email.'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Lozinka</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="pwd">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nova lozinka:</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="newpwd" value="">
            </div>
          </div>
          <div class="form-group">
          <label class="col-lg-3 control-label">Ponovite novu lozinku:</label>
          <div class="col-lg-8">
            <input class="form-control" type="password" name="newpwdrep" value="">
          </div>
        </div>
          <div class="butt1" > 
               <button class="button11" type="submit" name="submit">Potvrdi</button>
          
              <a href="index_user.php" style="font-size: 13.3333px" <button class="button22" type="submit">Odustani</button></a>
          </div>
        </form>
      </div>
  </div>
</div> ';


include("footer.php");



echo'</div>

<div class="col" style="width:20%">
  
  

</div>

';

if(isset($_POST['submit'])){
  include("functions.php");

  $hashedPwd=$_SESSION["password"];

  $id=$_SESSION["ID"];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $newpwd = $_POST['newpwd'];
  $newpwdrep=$_POST['newpwdrep'];
  $pwd=$_POST['pwd'];

  $newpwdhash=password_hash($pwd,PASSWORD_DEFAULT);

 if(password_verify($pwd, $hashedPwd)){
      if($newpwd==$newpwdrep){

    $hashedPwdnew= password_hash($newpwd,PASSWORD_DEFAULT);
$query = "UPDATE users SET name = '$name',
                surname = '$surname', username = '$username', email = '$email', password ='$hashedPwdnew'
                WHERE id = '$userid'";
              $result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
               <script type="text/javascript">
      alert("Uspješno ste uredili profil");
      window.location = "index_user.php";

      
  </script>
<?php




}else{
  //pass dont match
  header("Location: ../Oglasnik/profilepage.php?error=passdontmatch");
}
 }else{
    //pass not corr
    header("Location: ../Oglasnik/profilepage.php?error=wrongpasword");
 }
  

}


?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js
"></script>
<script type="text/javascript" >
$(document).ready(function()
{

$(".account").click(function()
{
var X=$(this).attr('id');
if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');
}
else
{
$(".submenu").show();
$(this).attr('id', '1');
}

});

//Mouse click on sub menus
$(".submenu").mouseup(function()
{
return false
});

//Mouse click on my account link
$(".account").mouseup(function()
{
return false
});


//Document Click
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
});
</script>


</body>
</html>