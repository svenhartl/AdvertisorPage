<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylefilter.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<section class="author-archive">
  <div class="container">
      
  <input type="radio" id="All" name="categories" value="All">
    <input type="radio" id="CSS" name="categories" value="CSS">
    <input type="radio" id="Mobiteli" name="categories" value="Mobiteli">
    <input type="radio" id="Sve-za-dom" name="categories" value="Sve-za-dom">
    <input type="radio" id="WordPress" name="categories" value="WordPress">
    <input type="radio" id="Slider" name="categories" value="Slider">
    <input type="radio" id="Ostalo" name="categories" value="Ostalo">

    <ol class="filters">
      <li>
        <label for="All">Svi oglasi</label>
      </li>
      <li>
        <label for="CSS">Informatika</label>
      </li>
      <li>
        <label for="Mobiteli">Mobiteli</label>
      </li>
      <li>
        <label for="Sve-za-dom">Sve za dom</label>
      </li>
      <li>
        <label for="WordPress">Odjeca i obuca</label>
      </li>
      <li>
        <label for="Slider">Hrana i pice</label>
      </li>
      <li>
        <label for="Ostalo">Ostalo</label>
      </li>
    </ol>
<?php


    echo'
     
    <ol class="posts">';
    
    $result = mysqli_query($db,"SELECT oglasi.id,oglasi.namee,oglasi.description, oglasi.image, oglasi.type, oglasi.price, users.name FROM users INNER JOIN oglasi on  users.id=oglasi  .users_id
WHERE type='Ostalo'");

    while($row = mysqli_fetch_array($result)) {
    
    echo '
    <li  class="post" data-category="Ostalo">
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
      </li>
      
      '
      ;
    }
    $result1 = mysqli_query($db,"SELECT oglasi.id,oglasi.namee,oglasi.description, oglasi.image, oglasi.type, oglasi.price, users.name FROM users INNER JOIN oglasi on  users.id=oglasi  .users_id
WHERE type='Sve za dom'");    
while($row1 = mysqli_fetch_array($result1)) {
    
    echo '
    
    <li class="post" data-category="Sve-za-dom">
    <article>
      <figure>
      <a href="oglaspage.php?id='.$row1['id'].'">';
      echo' <img " src="data:image;base64,'.base64_encode($row1['image']).'"/>';
    echo' </a>
        <figcaption>
        <ol class="post-categories">
    <li>
      <a href="">'.$row1['name'].'</a>
    <li>
    
    <!-- possibly more list items here -->
  </ol>
          <h2 onclick="submit1.submit();" class="post-title">
            <a onclick="submit1.submit();">'.$row1['namee'].'
            </a>
            <br>
            <br>
            <a>'.$row1['price'].'</a>
          </h2>
        </figcaption>
      </figure>
    </article>
  </li>
      ';
    }
    $result2 = mysqli_query($db,"SELECT oglasi.id,oglasi.namee,oglasi.description, oglasi.image, oglasi.type, oglasi.price, users.name FROM users INNER JOIN oglasi on  users.id=oglasi  .users_id
    WHERE type='Mobiteli'");    
    while($row2 = mysqli_fetch_array($result2)) {
        
        echo '
        
        <li class="post" data-category="Mobiteli">
        <article>
          <figure>
          <a href="oglaspage.php?id='.$row2['id'].'">';
          echo' <img " src="data:image;base64,'.base64_encode($row2['image']).'"/>';
        echo' </a>
            <figcaption>
            <ol class="post-categories">
        <li>
          <a href="">'.$row2['name'].'</a>
        <li>
        
        <!-- possibly more list items here -->
      </ol>
              <h2 onclick="submit1.submit();" class="post-title">
                <a onclick="submit1.submit();">'.$row2['namee'].'
                </a>
                <br>
                <br>
                <a>'.$row2['price'].'</a>
              </h2>
            </figcaption>
          </figure>
        </article>
      </li>
          ';
        }
    echo'</ol>
    
  </div>
</section>

';
?>