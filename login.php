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

  <title> Derma Sure | Login </title>
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
            <li class="nav-item active"><a class="nav-link" href="#">Login</a></li>
          </ul>
        </div>
      </nav>
</div>


<div class="row signup-row">
  <div class="col-lg-6 signup-container">
    <div class="container-fluid login-form-container">
      <h2 class="login-title">Login</h2>
    <form method="POST" action="login.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="emailEntered" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Here">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="passwordEntered" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password Here">
      </div>
      <button type="submit" class="btn btn-dark btn-lg login-button">Login</button>
    </form>

    <a class="new-user-link" href="signup.html">Want To Register?</a>

    <?php
    $username = $_POST['emailEntered'];
    $password = $_POST['passwordEntered'];
    $con = mysqli_connect("localhost","root","","dermasure_database");
    $sql= "SELECT * FROM login_signup WHERE Email = '$username' AND Password = '$password' ";
    $result = mysqli_query($con,$sql);
    $result = $result->fetch_Object();
    //echo $result->id;

    if(is_null($result)){
      echo "<br>";
      echo "Login Failed";
    }else{
      echo "<br>";
      echo "Login Success";
    }
    ?>

    </div>
  </div>
  <div class="col-lg-6">
      <img class="signup-image" src="https://images.unsplash.com/photo-1512303385664-9f4339ecc3f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
  </div>
</div>



<div class="container-fluid footer">
  <i class="fa fa-twitter footer-button" aria-hidden="true"></i>
  <i class="fa fa-facebook footer-button" aria-hidden="true"></i>
  <i class="fa fa-instagram footer-button" aria-hidden="true"></i>
  <i class="fa fa-envelope footer-button" aria-hidden="true"></i>
  <p>© Copyright 2020 FRIDaY Technologies</p>
</div>
</section>


</body>
