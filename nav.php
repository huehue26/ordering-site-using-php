<?php
// session_start();
$status = session_status();
if ($status == PHP_SESSION_NONE) {
  //There is no active session
  session_start();
} else
if ($status == PHP_SESSION_DISABLED) {
  //Sessions are not available
} else
if ($status == PHP_SESSION_ACTIVE) {
  //Destroy current and start new one
  session_destroy();
  session_start();
}
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Foodie</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/food.css">

</head>

<body>

  <nav id="food_nav" style="background-color: #506179!important;" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="food.php">Foodie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="food.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>



      <?php

      if (isset($_SESSION['valid']) != true) {
      ?>
        <ul class="nav navbar-nav navbar-right">
          <a href="sign_in.php"><button type="button" style="padding:3px;margin-right:3px;background-color: #8db0d6d4;" class="btn btn-primary">Sign In</button></a>
          <a href="sign_up.php"><button type="button" style="padding:3px;margin-right:3px;background-color: #8db0d6d4;" class="btn btn-primary">Sign Up</button></a>
        </ul>
      <?php
      } else {
      ?>
        <ul class="nav navbar-nav navbar-right">
          <a href="profile.php"> <button type="button" style="padding:3px;margin-right:3px;background-color: #8db0d6d4;" class="btn btn-primary">Profile</button></a>
          <a href="logout.php"><button type="button" style="padding:3px;margin-right:3px;;background-color: #8db0d6d4;" class="btn btn-primary">Logout</button></a>
        </ul>
      <?php
      }
      ?>


    </div>
  </nav>

  <div class="container-fluid mt-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1600x500/?orders" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x500/?delivery" class="d-block" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1600x500/?discount" class="d-block" alt="...">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>