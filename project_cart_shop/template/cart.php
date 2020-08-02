<?php
    session_start();
    require_once("database.php");

    $database = new Database();


?>
<!DOCTYPE html>
<html lang="en" style="position: relative; min-height: 100%;">
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
            <i class="fas fa-shopping-cart icon" ></i>
              <?php $result = (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) ? $database->numProduct($_SESSION['cart_item']) : 0;?>
              <span style="font-size: 10px; vertical-align: super; background-color: red; border-radius: 100%; color: white; text-align: center; visibility: <?php echo ($result !== 0) ? 'visible' : 'hidden'; ?>;"><?php echo ($result <= 9) ? $result : '9+'; ?></span>
          </a>
          <i class="fas fa-search" style="color:black; margin: 20px;"></i>
        </div>
    </nav>
    <!-- cart -->
    <?php
        
        if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) 
        {
    ?>
        <div class="container">
            <h2>Your Cart</h2>
              <a class="btn btn-link btn-sm px-0 text-body" href="product_lv.php">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg> Continue Shopping
              </a>
            <table class="table table-hover" style="text-align: center;">
                
                <thead>
                <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $total = 0; 
                    foreach ($_SESSION['cart_item'] as $key_car => $val_cart_item) :
                ?>
                <tr style="line-height: 100px;">
                    <td><?php echo $val_cart_item['id']; ?></td>
                    <td><?php echo $val_cart_item['lv_name']; ?></td>
                    <td>
                        <img class="card-img-top" style="height: 100px; width: 150px; display: block;" src="image/<?php echo $val_cart_item['lv_image']?>" data-holder-rendered="true">
                    </td>
                    <td><?php echo number_format($val_cart_item['lv_price']); ?> $</td>
                    <td><?php echo $val_cart_item['quantity']; ?> </td>
                    <td><?php
                            $total_item = ($val_cart_item['lv_price'] * $val_cart_item['quantity']);
                            echo number_format($total_item); 
                        ?> $</td>
                    <td >
                        <form action="process.php" method="post" name="remove<?php echo $val_cart_item['id']; ?>" >
                            <input type="hidden" name="product_id" value = "<?php echo $val_cart_item['id']; ?>">
                            <input type="hidden" name="action" value="remove">
                            <input type="submit" value="Remove" name="submit" class="btn btn-sm btn-danger">
                        </form>
                    </td>
                </tr>
                <?php
                    
                    $total += $total_item; 
                    endforeach; 
                ?>
                </tbody>
            </table>
            <div>Grand Total: <strong><?php echo number_format($total); ?> $</strong></div>
            
            <div style="text-align: center;" >
              
              <form action="process.php" method="post" name="removeall" >
                <input type="button" class="btn btn-outline-dark" value="Proceed to Checkout">
                <input type="hidden" name="action" value="removeall">
                <input type="submit" class="btn btn-outline-danger" value="Empty Cart">
              </form>
            </div>
        </div>
        <?php } else {?>
                <div class="container">
                    <h2>Your Cart</h2>
                    <p>Your Cart is empty</p>
                    <a class="btn btn-link btn-sm px-0 text-body" href="product_lv.php">
                      <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg> Continue Shopping
                    </a>
                </div>
        <?php } ?>
         
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