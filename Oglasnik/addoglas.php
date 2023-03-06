<?php
    include("dbconn.php");
    
    $id=$_SESSION["ID"];

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3 = $_POST['image3'];
    $type = $_POST['type'];
    $price = $_POST['price'];

    if(isset($_POST['submit']))
{    
    $result = mysqli_query($db,"SELECT oglasi.users_id,oglasi.namee, oglasi.description, oglasi.image, oglasi.image1, oglasi.image2,oglasi.image3,oglasi.type,oglasi.price 
    FROM users INNER JOIN oglasi on  users.id=oglasi.users_id
    WHERE users_id=$id");

    $sql = "INSERT INTO oglasi (users_id,namee,description,image,image1,image2,image3,type,price) VALUES ('$id','$name','$description','$image','$image1',
    '$image2','$image3','$type','$price')";

     if (mysqli_query($db, $sql)) {
      header("Location: index_user.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);

}
    ?>
