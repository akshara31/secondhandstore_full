<?php
    session_start();
    require_once ('./db.php');
    require_once ('stat.php');

    $database = new ConnectDB("iwp","essentials");
    
    if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "product_id");
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart!')</script>";
                echo "<script>window.location = 'stationery.php'</script>";
            }else{
    
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
    
                $_SESSION['cart'][$count] = $item_array;
            }
    
        }else{
    
            $item_array = array(
                    'product_id' => $_POST['product_id']
            );
    
            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stationery</title>
    <script src="https://kit.fontawesome.com/9e51ee02b4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stationery.css">
  </head>
  <body>

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
              <a href="cart.php" class="nav-link">cart</a>
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

    <div class="container">
      <img src="images/stationery.jpg" height=450rem width=100%>
      <div class="ctitle">stationery</div>
      <div class="desc"><q>there was something very comfortable in having plenty of stationery.</q></div>
      <div class="author">- Charles Dickens</div>
    </div>


    <section class="container-fluid">
      <div class="row justify-content-center">

      <?php
                $result = $database->getSData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['Product_ID'],$row['Product_Name'], $row['Product_Price'], $row['Product_Desc'], $row['Product_Condition'], $row['Product_Seller'], $row['Product_Contact'], $row['Product_Type'], $row['Product_URL'] );
                }
            ?>
      </div>
    </section>


    <footer>
      <p class="credit">Created with ❤️</p>
      <a href="#" class="contact">Contact Us at abc@mail.com</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>