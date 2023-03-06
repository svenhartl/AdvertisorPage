<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylefilter.css">

    <title>Rezultati pretraživanja</title>
</head>
<body>
    <?php
    include("dbconn.php");
    if(isset($_SESSION['ID'])){
        include("navbar_user.php");
    
    }else{
        include("navbar1.php");
    
    }
    ?>
<div class="row">

<div class="col" style="width:20%">

 

</div>

<div class="col-mid">
    
    <?php
    include("navbar.php");?>
    <h class="rez">Rezultati pretraživanja:</h>
    <br></br>
    <section class="author-archive">
     <ol class="posts">
<?php



    if(isset($_GET['query']))
    { 
        $query=$_GET['query'];

        $result = mysqli_query($db,"SELECT oglasi.id,oglasi.namee,oglasi.description, oglasi.image, oglasi.type, oglasi.price, users.name FROM 
        users INNER JOIN oglasi on  users.id=oglasi.users_id WHERE namee LIKE '%".$query."%'");


        while($row = mysqli_fetch_array($result)) {

            echo '

                <li  class="post">
        <article>
          <figure>
            <a href="oglaspage.php?id='.$row['id'].'">';
             echo' <img onclick="submit1.submit();" src="data:image;base64,'.base64_encode($row['image']).'"/>';
           echo' </a>
            <figcaption>
            <ol class="post-categories">
        <li>
          <a href="">'.$row['name'].'</a>
        <li>
        
        <!-- possibly more list items here -->
      </ol>
              <h2 onclick="submit1.submit();" class="post-title">
                <a onclick="submit1.submit();">'.$row['namee'].'
                </a>
                <br>
                <br>
                <a>'.$row['price'].'</a>
              </h2>

            </figcaption>
          </figure>
        </article>
        <br>
              <input value="'.$row['id'].'" name="idd" hidden>
              <br>
      </li>';
      
        }
     }
     echo'
     </div>


<div class="col" style="width:20%">
  
  

</div>

</div>
     ';
     ?>
     </ol>
    </section>
</body>
</html>


			