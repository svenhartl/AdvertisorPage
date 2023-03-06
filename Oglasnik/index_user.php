<?php
include("dbconn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
    <script src="scripts.js"></script>
    <title>Oglasnik</title>
</head>
<body>
<?php include("navbar_user.php"); ?>
<div class="row">

<div class="col" style="width:20%">

 

</div>

<div class="col-mid">

    <?php include("navbar.php"); ?>
<div class="addiv">
<a href="oglasmaker.php" class="button4" style="background-color:#111">+ PREDAJ OGLAS</a>

</div>
<?php 
    include("filter.php");
    ?>
   

    <?php 
    include("footer.php");
    ?>

</div>


<div class="col" style="width:20%">
  
  

</div>

</div>

</body>
</html>