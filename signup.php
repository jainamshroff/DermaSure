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
  <div class="col-lg-6">
      <img class="signup-image" src="https://images.unsplash.com/photo-1531895861208-8504b98fe814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
  </div>
  <div class="col-lg-6 signup-container">
    <div class="container-fluid login-form-container">
      <h2 class="login-title">Sign Up</h2>
    <form method="POST" action="signup.php">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" name="nameEntered" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
        <label for="emailAdd">Email address</label>
        <input type="email" class="form-control" id="emailAdd" name="emailEntered" aria-describedby="emailHelp" placeholder="Enter Email Here">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="passwordInput" name="passwordEntered" placeholder="Enter Password Here">
      </div>
      <button type="submit" class="btn btn-dark btn-lg login-button">Sign Up</button>
    </form>

    <a class="new-user-link" href="login.html">Already A Member?</a>
    <?php

    $link = mysqli_connect("localhost", "root", "", "dermasure_database");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $name = $_POST['nameEntered'];
    $email =  $_POST['emailEntered'];
    $password = $_POST['passwordEntered'];

    $sql = "INSERT INTO login_signup (`id`, `Name`, `Email`, `Password`) VALUES (NULL, '$name','$email', '$password');";
    if(mysqli_query($link, $sql)){
      echo "<br>";

      // $sql= "SELECT * FROM login_signup WHERE Email = '$email' AND Password = '$password' ";
      // $result = mysqli_query($link,$sql);
      // $result = $result->fetch_Object();
      //echo $result->id;

      // $sql = "CREATE TABLE cartforid$result->id
      // ( `productid` INT(20) NOT NULL,
      //   `productname` VARCHAR(25) NOT NULL,
      //   `productprice` INT(20) NOT NULL,
      //   `productquantity` INT(20) NOT NULL,
      //    PRIMARY KEY (`productid`))";
      //
      // mysqli_query($link, $sql);
      echo "Registered Successfully";
      // php header("Location: cart.php");
    } else{
        echo "<br>";
        echo "Registration Failed";
    }

    // Close connection
    mysqli_close($link);

     ?>
    </div>
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
