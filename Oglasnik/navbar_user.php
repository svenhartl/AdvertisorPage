
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: 'Poppins', sans-serif;}

.navbar {
  width: 100%;
  background-color: #111;
  overflow: auto;

 
}

.navbar a {
  float: right;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Poppins', sans-serif;
}

.navbar a:hover {
  background-color: #343838;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }

}
</style>
<body>
<?php


$loggedinuser=$_SESSION["name"];
$loggedinusersurname=$_SESSION["surname"];

?> 
<div class="navbar">
  <a href="profilepage.php"><i class="fa fa-fw fa-user"></i>Profil</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i>Odjava</a>
  
</div>

</body>
</html> 
