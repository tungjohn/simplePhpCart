<?php
    session_start();
    require_once("database.php");

    $database = new Database();

/*     echo "<pre>";
    print_r($_SESSION);
    echo "</pre>"; */
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
    <script src="https://kit.fontawesome.com/yourcode.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

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
    <script src="https://kit.fontawesome.com/f751327cf7.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
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
              <a class="dropdown-item" href="#">Louis Vuitton</a>
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
        <div id="icon">
          <i class="fas fa-user" style="color:black; margin: 20px;"></i>
          <i class="fas fa-heart" style="color:black; margin: 20px;"></i>        
          <a href="cart.php" style="text-decoration: none; color:black; margin: 20px;">
            <i class="fas fa-shopping-cart icon"></i>
            <?php $result = $database->numProduct($_SESSION['cart_item']);?>
            <span style="background-color: red; border-radius: 25%; color: white; text-align: center; visibility: <?php echo ($result !== 0) ? 'visible' : 'hidden'; ?>;"><?php echo $result; ?></span>
          </a>
          <i class="fas fa-search" style="color:black; margin: 20px;"></i>
        </div>
      </div>
    </nav>
<!-- end navbar -->
<!-- container -->
<div class="container" style="margin-top: 50px;">
        <div class="row">
            <?php
                $sql = "SELECT * FROM product_lv";
                $products = $database->runQuery($sql);
            ?>
            <?php if  (!empty($products)) : ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-sm-6">
                        <form action="process.php" method="post" name="product<?php echo $product['id']?>">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" style="height: 250px; width: 100%; display: block;" src="image/<?php echo $product['lv_image']?>" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text" style="font-weight: bold">Product <?php echo $product['lv_name']; ?></p>
                                    <p class="card-text" style="font-weight: bold"><?php echo $product['lv_price']; ?> $</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-inline">
                                            <label for="">Quantity:&nbsp;</label>
                                            <input type="number" class="form-control" name="quantity" value="1" min="1" max="10">
                                            <input type="hidden" name="action" value="add">
                                            <input type="hidden" name="product_id" value="<?php echo $product['id'];?>">
                                            <label for="" style="margin-left: 10px;">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary" name="submit">Add to cart  
                                                  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z"/>
                                                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                  </svg>
                                                </button>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php endforeach; ?>
            <?php endif;?>
            

        </div>
    </div>
<!-- end container -->

<!-- footer -->

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
<!-- end footer -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="../assets/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
