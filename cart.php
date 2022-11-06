<?php
session_start();

require_once("db.php");
require_once("car.php");

$db = new ConnectDB("iwp", "essentials");

if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value["product_id"] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
        echo "<script>alert('Product has been Removed!')</script>";
        echo "<script>window.location = 'cart.php'</script>";
      }
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Second Hand Store</title>
  <link rel="icon" href="images/icon.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="home.css">

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- Font Logo -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;600&display=swap" rel="stylesheet">
  <!-- font-family: 'Raleway', sans-serif; -->

  <!-- Font Body -->
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300&display=swap" rel="stylesheet">
  <!-- font-family: 'Figtree', sans-serif; -->

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery.js"></script>
  <script type="text/javascript" src="home.js"></script>
</head>

<body>

  <!-- header section starts  -->
  <header class="header">
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top shadow-sm">
      <img id="mainLogo" src="images/icon.png">
      <a href="home.php" class="logo">The<span>SecondhandStore</span></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navLinks">
        <ul class="navbar-nav">
          <li class="nav-item pr-2">
            <a href="home.php" class="nav-link">homepage</a>
          </li>
          <li class="nav-item pr-2">
            <div class="dropdown">
              <button class="dropbtn">shop with us
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="stationery.php">stationery</a>
                <a href="essentials.php">hostel essentials</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="selling.php" class="nav-link">sell</a>
          </li>
          <li class="nav-item">
            <a href="login.php">
              <img id="logout" src="images/logout.png">
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- header section ends -->

  <div class="container-fluid">
    <div class="row px-5">
      <div class="col-md-7">
        <div class="shopping-cart">
          <h6>My Cart</h6>
          <hr>

          <?php

          $total = 0;
          if (isset($_SESSION['cart'])) {
            $product_id = array_column($_SESSION['cart'], 'product_id');

            $result = $db->getAData();
            while ($row = mysqli_fetch_assoc($result)) {
              foreach ($product_id as $p_id) {
                if ($row['Product_ID'] == $p_id) {
                  cartElement($row['Product_URL'], $row['Product_Name'], $row['Product_Price'], $row['Product_ID'], $row['Product_Seller']);
                  $total = $total + (int)$row['Product_Price'];
                }
              }
            }
          } else {
            echo "<h5>Cart is Empty</h5>";
          }
          ?>

        </div>
      </div>
      <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

        <div class="pt-4">
          <h6>PRICE DETAILS</h6>
          <hr>
          <div class="row price-details">
            <div class="col-md-6">
              <?php
              if (isset($_SESSION['cart'])) {
                $count  = count($_SESSION['cart']);
                echo "<h6>Price ($count items)</h6>";
              } else {
                echo "<h6>Price (0 items)</h6>";
              }
              ?>
              <h6>Delivery Charges</h6>
              <hr>
              <h6>Amount Payable</h6>
            </div>
            <div class="col-md-6">
              <h6>Rs <?php echo $total; ?></h6>
              <h6 class="text-success">FREE</h6>
              <hr>
              <h6>Rs <?php
                    echo $total;
                    ?></h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>