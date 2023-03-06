
<?php
include("dbconn.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="oglaspagecss.css">
    <title>Document</title>
</head>
<body>
<?php

 if(isset($_SESSION['ID'])){
    include("navbar_user.php");

}else{
    include("navbar1.php");

}
     if(isset($_GET['id']))
     {  
         $id=$_GET['id'];
     $result = mysqli_query($db,"SELECT oglasi.id,oglasi.namee,oglasi.description, oglasi.image,oglasi.image1,oglasi.image2,oglasi.image3, oglasi.type, oglasi.price,oglasi.stanje  FROM oglasi WHERE id=$id");
     
         while($row = mysqli_fetch_array($result)) {
echo'
<div class="row">

<div class="col" style="width:20%">

 

</div>

<div class="col-mid">

 
       <div class="container">
       <div class="single-product">
           <div class="row">
               <div class="col-6">
                   <div class="product-image">
                       <div class="product-image-main">
                           <img src="data:image;base64,'.base64_encode($row['image']).'" alt="" id="product-main-image">
                       </div>
                       <div class="product-image-slider">
                       <img src="data:image;base64,'.base64_encode($row['image']).'"  alt=""  class="image-list">
                           <img src="data:image;base64,'.base64_encode($row['image1']).'"  alt=""  class="image-list">
                           <img src="data:image;base64,'.base64_encode($row['image2']).'"  alt=""  class="image-list">
                           <img src="data:image;base64,'.base64_encode($row['image3']).'"  alt=""  class="image-list">
                       </div>
                   </div>
               </div>
               <div class="col-6">
                   <div class="breadcrumb">
                       <span><a href="#">Home</a></span>
                       <span><a href="#">Product</a></span>
                       <span class="active">T-shirt</span>
                   </div>

                   <div class="product">
                       <div class="product-title">
                           <h2>'.$row['namee'].'</h2>
                       </div>
                       <div class="product-rating">
                           <span><i class="bx bxs-star"></i></span>
                           <span><i class="bx bxs-star"></i></span>
                           <span><i class="bx bxs-star"></i></span>
                           <span><i class="bx bxs-star"></i></span>
                           <span><i class="bx bxs-star"></i></span>
                           <span class="review">(47 Review)</span>
                       </div>
                       <div class="product-price">
                           <span class="offer-price">'.$row['price'].'</span>
                       </div>

                       <div class="product-details">
                           <h3>Opis</h3>
                           <p>'.$row['description'].'</p>
                       </div>
                       <div class="product-size">
                           <h4>Stanje</h4>
                           <div class="size-layout">
                               <input type="radio" name="size" value="S" id="1" class="size-input">
                               <label  class="size">'.$row['stanje'].'</label>
                           </div>
                       </div>
                       
                       <span class="divider"></span>

                       <div class="product-btn-group">
                           <div class="button buy-now"><i class="bx bxs-zap" ></i> Buy Now</div>
                           <div class="button add-cart"><i class="bx bxs-cart" ></i> Add to Cart</div>
                           <div class="button heart"><i class="bx bxs-heart" ></i> Add to Wishlist</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>';
   include("footer.php");
   echo'</div>


<div class="col" style="width:20%">



</div>

</div>';
   
         }}?>
   <!--script-->
   <script>
       const sliderMainImage = document.getElementById("product-main-image"); //product container image
const sliderImageList = document.getElementsByClassName("image-list"); // image thumblian group selection
console.log(sliderImageList);

sliderImageList[0].onclick = function(){
   sliderMainImage.src = sliderImageList[0].src;
   console.log(sliderMainImage.src);
};

sliderImageList[1].onclick = function(){
   sliderMainImage.src = sliderImageList[1].src;
   console.log(sliderMainImage.src);
};

sliderImageList[2].onclick = function(){
   sliderMainImage.src = sliderImageList[2].src;
   console.log(sliderMainImage.src);
};

sliderImageList[3].onclick = function(){
   sliderMainImage.src = sliderImageList[3].src;
   console.log(sliderMainImage.src);
};
   </script>

</body>
</html>
   