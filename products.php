<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Linking the local css file -->
  <link rel="stylesheet" href="css/login.css">

  <title> Derma Sure | Products </title>
</head>

<body>
  <section class="home-main-section">
    <div class="container-fluid home-main-div">
      <nav class="navbar navbar-expand-lg navbar-light home-main-nav">
        <a class="navbar-brand" href="index.html">Derma Sure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="aboutus.html">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="contactus.html">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
            <li class="nav-item active"><a class="nav-link" href="login.html">Login</a></li>
          </ul>
        </div>
      </nav>
</div>
</section>

<div class="row product-row container-fluid" style="padding-left: 100px; margin-top:100px; margin-bottom: 100px;">
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.shopify.com/s/files/1/0390/2985/products/hello-aloe-face-wash_website-images_1024x1024.jpg?v=1580295216" class="card-img-top" alt="...">
      <div class="card-body">
        <form class="" action="products.php" method="post">
        <label class="card-title">Face Wash</label>
        <br>
        <label class="card-title">12$</label>
        <br>
        <input type="number" name="numberEntered" value="1" placeholder="QTY">
        <br>
        <br>
        <input type="hidden" name="priceEntered" value="12">
        <input type="hidden" name="nameEntered" value="Face Wash">
        <button type="submit" class="btn btn-lg btn-dark" name="button">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.shopify.com/s/files/1/0390/2985/products/GTMM_listing-images_01_1024x1024.jpg?v=1579006772" class="card-img-top" alt="...">
      <div class="card-body">
        <form class="" action="products.php" method="post">
        <label class="card-title">Moisturizer</label>
        <br>
        <label class="card-title">15$</label>
        <br>
        <input type="number" name="numberEntered" value="1" placeholder="QTY">
        <br>
        <br>
        <input type="hidden" name="priceEntered" value="15">
        <input type="hidden" name="nameEntered" value="Moisturizer">
        <button type="submit" class="btn btn-lg btn-dark" name="button">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.shopify.com/s/files/1/0390/2985/products/Plum-Daily-_-Weekly-Bestseller-Duo-for-Oily-Skin_1024x1024.jpg?v=1588247719" class="card-img-top" alt="...">
      <div class="card-body">
        <form class="" action="products.php" method="post">
        <label class="card-title">Face Mask</label>
        <br>
        <label class="card-title">8$</label>
        <br>
        <input type="number" name="numberEntered" value="1" placeholder="QTY">
        <br>
        <br>
        <input type="hidden" name="priceEntered" value="8">
        <input type="hidden" name="nameEntered" value="Face Mask">
        <button type="submit" class="btn btn-lg btn-dark" name="button">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="row product-row container-fluid" style="padding-left: 100px; margin-top:100px; margin-bottom: 100px;">
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.shopify.com/s/files/1/0390/2985/products/CWT-SPF-50_website-images_1024x1024.jpg?v=1580240073" class="card-img-top" alt="...">
      <div class="card-body">
        <form class="" action="products.php" method="post">
        <label class="card-title">Sunscreen</label>
        <br>
        <label class="card-title">10$</label>
        <br>
        <input type="number" name="numberEntered" value="1" placeholder="QTY">
        <br>
        <br>
        <input type="hidden" name="priceEntered" value="10">
        <input type="hidden" name="nameEntered" value="Sun Screen">
        <button type="submit" class="btn btn-lg btn-dark" name="button">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.shopify.com/s/files/1/0390/2985/products/hello-aloe-face-wash_website-images_1024x1024.jpg?v=1580295216" class="card-img-top" alt="...">
      <div class="card-body">
        <form class="" action="products.php" method="post">
        <label class="card-title">Face Scrub</label>
        <br>
        <label class="card-title">20$</label>
        <br>
        <input type="number" name="numberEntered" value="1" placeholder="QTY">
        <br>
        <br>
        <input type="hidden" name="priceEntered" value="20">
        <input type="hidden" name="nameEntered" value="Face Scrub">
        <button type="submit" class="btn btn-lg btn-dark" name="button">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
      <img src="https://cdn.shopify.com/s/files/1/0390/2985/products/EL-toner_website-images_1024x1024.jpg?v=1587118975" class="card-img-top" alt="...">
      <div class="card-body">
        <form class="" action="products.php" method="post">
        <label class="card-title">Face Toner</label>
        <br>
        <label class="card-title">25$</label>
        <br>
        <input type="number" name="numberEntered" value="1" placeholder="QTY">
        <br>
        <br>
        <input type="hidden" name="priceEntered" value="25">
        <input type="hidden" name="nameEntered" value="Face Toner">
        <button type="submit" class="btn btn-lg btn-dark" name="button">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php

if (!empty($_POST)){
$quantity = $_POST['numberEntered'];
$name = $_POST['nameEntered'];
$price = $_POST['priceEntered'];
// $quantity = intval($quantity);
// $price = intval($price);

$link = mysqli_connect("localhost", "root", "", "dermasure_database");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO cart ( `productname`, `productprice`, `productquantity`,`productid`) VALUES ('$name','$price', '$quantity',NULL);";
mysqli_query($link, $sql);

}
 ?>


<section class="home-main-section">
<div class="container-fluid footer">
  <i class="fa fa-twitter footer-button" aria-hidden="true"></i>
  <i class="fa fa-facebook footer-button" aria-hidden="true"></i>
  <i class="fa fa-instagram footer-button" aria-hidden="true"></i>
  <i class="fa fa-envelope footer-button" aria-hidden="true"></i>
  <p>© Copyright 2020 FRIDaY Technologies</p>
</div>
</section>


</body>
