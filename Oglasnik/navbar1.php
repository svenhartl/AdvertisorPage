<?php

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');  /** Poppins Font **/
body {font-family: 'Poppins', sans-serif;}

.navbar {
  width: 100%;
  background-color: #111;
  overflow: auto;
  font-family: 'Poppins', sans-serif;
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
  background-color: #1111;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }

}
</style>
<body>

<div class="navbar">
  <a href="usersignup.php"><i class="fa fa-fw fa-user"></i>Registracija</a>
  <a href="loginpage.php"><i class="fa fa-fw fa-user"></i> Prijava</a>
</div>

</body>
</html> 
