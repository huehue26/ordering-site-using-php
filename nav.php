  <?php
  session_start();
  require_once 'connect.php';
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <script src="assets/js/source.bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <title>Foodie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>

  <body>
    <nav class="navbar fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Foodie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php">Home </a>
            </li>
            <li><a>About Us</a>
            </li>
            <li><a>Contact Us</a> </li>
          </ul>

          <?php

          if (isset($_SESSION['valid']) != true) {
          ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="sign_in.php">Sign In</a></li>
              <li><a href="sign_up.php">Sign Up</a></li>
            </ul>
          <?php
          } else {
          ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          <?php
          }
          ?>

        </div>
      </div>
    </nav>
  </body>

  </html>