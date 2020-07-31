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
            <li class="nav-item active"><a class="nav-link" href="#">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
          </ul>
        </div>
      </nav>
</div>


<div class="row signup-row">
  <div class="col-lg-6 signup-container">
    <div class="container-fluid login-form-container">
      <h2 class="login-title">Contact Us</h2>
    <form method="POST" action="contactus.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name="nameEntered">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name="emailEntered">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Phone Number" name="phoneNumberEntered">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Ask Us</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textEntered"></textarea>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Want Callback?</label>
      </div>
      <button type="submit" class="btn btn-dark btn-lg login-button">Submit Query</button>
    </form>



    </div>
  </div>


  <?php
  if(isset($_POST['submit'])){
    $name=$_POST['nameEntered'];
    $email=$_POST['emailEntered'];
    $phone=$_POST['phoneNumberEntered'];
    $msg=$_POST['textEntered'];

    $to='jainamshroff7@gmail.com';
    $subject='Form Submission';
    $message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      echo "Sent Successfully! Thank you"." ".$name.", We will contact you shortly!";
    }
    else{
      echo "Something went wrong!";
    }
  }
  ?>



  <div class="col-lg-6 ways-to-contact">
    <h3>Ways To Reach Us</h3>
    <h2>Call</h2>
    <p>No: 9879879879</p>
    <h2>Email</h2>
    <p>add: jainamshroff7@gmail.com</p>
    <h2>SMS</h2>
    <p>No: 9879879879</p>
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
