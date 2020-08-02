<?php
    session_start();
    require_once("database.php");

    $database = new Database();


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Product example · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/product/"> -->

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f751327cf7.js" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
   
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="image/Screenshot_1.jpg" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
          <strong style="font-size: 30px; font-family: monospace;">Meww</strong>
        </a>
      </nav>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hand Bag
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="product_lv.php">Louis Vuitton</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Hermes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Furla</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sun Glasses
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">D&G</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">GUCCI</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Rayban</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Perfume
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Tom Ford</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Armani</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Versace</a>
            </div>
          </li>
 
        </ul>
        
        
      </div>
      <div id="icon">
        <i class="fas fa-user" style="color:black; margin: 20px;"></i>
        <i class="fas fa-heart" style="color:black; margin: 20px;"></i>        
        <a href="cart.php" style="text-decoration: none; color:black; margin: 20px;">
          <i class="fas fa-shopping-cart icon"></i>
          <?php $result = (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) ? $database->numProduct($_SESSION['cart_item']) : 0;?>
          <span style="font-size: 10px; vertical-align: super; background-color: red; border-radius: 100%; color: white; text-align: center; visibility: <?php echo ($result !== 0) ? 'visible' : 'hidden'; ?>;"><?php echo ($result <= 9) ? $result : '9+'; ?></span>
        </a>
        <i class="fas fa-search" style="color:black; margin: 20px;"></i>
      </div>

    </nav>
    
<!-- end navbar -->
<!-- slide -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <img src="image/slide1.jpg" alt="" sizes="100vw">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">The New Collection</h1>
    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
  </div>
  
</div>
<!-- end slide -->

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">ELEVATED ACCENTS</h2>
      <p class="lead">Price: 3,520.00 USD</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="image/handbag2.jpg" alt="" style="height: 300px; width: 100%;">
    </div>
  </div>
  <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">DOUBLE ZIP POCHETTE</h2>
      <p class="lead">Price: 1,630.00 USD</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="image/handbag7.jpg" alt="" style="height: 300px; width: 100%;">
    </div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">ELEVATED ACCENTS</h2>
      <p class="lead">Price: 3,520.00 USD</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="image/handbag5.jpg" alt="" style="height: 300px; width: 100%;">
    </div>
  </div>
  <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">DOUBLE ZIP POCHETTE</h2>
      <p class="lead">Price: 1,630.00 USD</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="image/handbag3.jpg" alt="" style="height: 300px; width: 100%;">
    </div>
  </div>
</div>



<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <img src="image/Screenshot_1.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cool stuff</a></li>
        <li><a class="text-muted" href="#">Random feature</a></li>
        <li><a class="text-muted" href="#">Team feature</a></li>
        <li><a class="text-muted" href="#">Stuff for developers</a></li>
        <li><a class="text-muted" href="#">Another one</a></li>
        <li><a class="text-muted" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Resource</a></li>
        <li><a class="text-muted" href="#">Resource name</a></li>
        <li><a class="text-muted" href="#">Another resource</a></li>
        <li><a class="text-muted" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Business</a></li>
        <li><a class="text-muted" href="#">Education</a></li>
        <li><a class="text-muted" href="#">Government</a></li>
        <li><a class="text-muted" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Team</a></li>
        <li><a class="text-muted" href="#">Locations</a></li>
        <li><a class="text-muted" href="#">Privacy</a></li>
        <li><a class="text-muted" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="../assets/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
