<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izradi oglas</title>
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="oglas.css">
    <link rel="icon" type="image/x-icon" href="favicon1.ico">

</head>

<body>
    <script>
   
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    </script>
<?php
include("dbconn.php");
include("navbar_user.php"); 
$id=$_SESSION["ID"];
$date=date("Y-m-d");
echo'<div class="row">

<div class="col" style="width:20%">

 

</div>

<div class="col-mid">


  
   
    
    <div class="container">

  <form action="addoglas.php" method="post">
  <label style="font-size: 20px">Odaberi naslovnu sliku</label>
  <div class="container">
  
      <input type="file" id="file-input" name="image" accept="image/jpg, image/jpeg" onchange="preview()">
      <label class="label1" for="file-input">
          <i class="fas fa-upload"></i> &nbsp; Odaberi naslovnu fotografiju
      </label>
      <p id="num-of-files">0 datoteka odabrano</p>
      <div id="images"></div>
  </div>
  <label style="font-size: 20px">Odaberi 3 slike</label>
  <div class="container1">
        <input type="file" id="file-input1" name="image1"  accept="image/jpg, image/jpeg" onchange="preview1()">
        <label class="label1" for="file-input1">
            <i class="fas fa-upload"></i> &nbsp; Odaberi
        </label>
        <p id="num-of-files1">0 datoteka odabrano</p>
        <div id="images1"></div>
    </div>
    <div class="container1">
        <input type="file" id="file-input2" name="image2" accept="image/jpg image/jpeg" onchange="preview2()">
        <label class="label1" for="file-input2">
            <i class="fas fa-upload"></i> &nbsp; Odaberi
        </label>
        <p id="num-of-files2">0 datoteka odabrano</p>
        <div id="images2"></div>
    </div>
    <div class="container1">
        <input type="file" id="file-input3" name="image3" accept="image/jpeg image/jpg" onchange="preview3()">
        <label class="label1" for="file-input3">
            <i class="fas fa-upload"></i> &nbsp; Odaberi
        </label>
        <p id="num-of-files3">0 datoteka odabrano</p>
        <div id="images3"></div>
    </div>
    <script src="script1.js"></script>

    <label for="fname">Naslov oglasa</label>
    <input type="text" id="naslov" name="name" placeholder="Naslov...">

    <label for="lname">Opis</label>
    <input type="text" id="opis" name="description" placeholder="Opis...">

    <label for="country">Kateogrija</label>
    <select id="country" name="type">
      <option value="Sport i oprema">Sport i oprema</option>
      <option value="Informatika">Informatika</option>
      <option value="Mobiteli">Mobiteli</option>
      <option value="Sve za dom">Sve za dom</option>
      <option value="Odjeca i obuca">Odjeca i obuca</option>
      <option value="Hrana i pice">Hrana i pice</option>
      <option value="Ostalo">Ostalo</option>
    </select>
    <label for="price">Cijena</label>
    <input type="currency" name="price" placeholder="Cijena..." />
     <br>
     <input value="'.$id.'" hidden>
     <br>

     <br>
     <input name="date" value="'.$date.'" hidden>
     <br>

    <button type="submit" class="button" name="submit">Potvrdi</button>
  </form>
</div>
<?php 
    include("footer.php");
    ?>
</div>';
  ?>
<script>
    var currencyInput = document.querySelector('input[type="currency"]')
var currency = 'EUR' // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

 // format inital value
onBlur({target:currencyInput})

// bind event listeners
currencyInput.addEventListener('focus', onFocus)
currencyInput.addEventListener('blur', onBlur)


function localStringToNumber( s ){
  return Number(String(s).replace(/[^0-9.-]+/g,""))
}

function onFocus(e){
  var value = e.target.value;
  e.target.value = value ? localStringToNumber(value) : ''
}

function onBlur(e){
  var value = e.target.value

  var options = {
      maximumFractionDigits : 2,
      currency              : currency,
      style                 : "currency",
      currencyDisplay       : "symbol"
  }
  
  e.target.value = (value || value === 0) 
    ? localStringToNumber(value).toLocaleString(undefined, options)
    : ''
}
</script>




<div class="col" style="width:20%">
  
  

</div>

</div>
</body>
</html>