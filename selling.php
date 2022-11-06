<?php
    session_start();
    require_once ('./db.php');
    $database = new ConnectDB("iwp","essentials");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>TheSecondhandStore</title>
  <link rel="icon" href="images/icon.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="selling.css">

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
  <!-- header section ends -->

  <!-- content section starts -->
  <section class="main-section" id="main">
    <div class="row">
      <div class="title-desc col-lg-6">
        <h1 class="big-heading"><b> We know the joy <br> <span class="spanword">Spread</span> the feeling</b></h1>
        <h2 class="small-heading">Make someone's dream come true as yours did too</h2>
        <!-- <p class="text-ext">When it comes to shopping for things like clothes, toys, furniture and more, oftentimes and unfortunately, the go-to tends to be buying them new. The convenience of running out to a big-box store and picking up these items can be tempting. But at what cost? Not only does buying new typically cost you more money, but the environment is also paying a high price to produce those new items. </p> -->
        <p class="text-ext">Think you have a few things lying around that you just want to throw away, but it's in a reasonably good condition? You've come to just the right place. This is a place where you can dish out your unused belongings at even a good price! Enter Details and Sell Now! </p>

      </div>

      <!-- selling form -->
      <div class=" phone-container col-lg-6">
        <div class="login-box">
          <h2>Sell Here</h2>
          <form action="selldb.php" method="POST" >
            <div class="user-box">
              <input type="text" name="p_name" value="" placeholder="Product Name">
              <!-- <label>Product Name</label> -->
            </div>
            <div class="user-box">
                <input type="text" name="p_price" value="" placeholder="Price">
                <!-- <label>Price</label> -->
              </div>
              <div class="user-box">
                <input type="text" name="p_desc" value="" placeholder="Description">
                <!-- <label>Description</label> -->
              </div>
              <div class="user-box">
                <input type="text" name="p_cond" value="" placeholder="Condition">
                <!-- <label>Condition</label> -->
              </div>
              <div class="user-box">
                <input type="text" name="p_seller" value="" placeholder="Seller Name">
                <!-- <label>Seller Name</label> -->
              </div>
              <div class="user-box">
                <input type="text" name="p_contact" value="" placeholder="Seller Contact">
                <!-- <label>Seller Contact</label> -->
              </div>
            <div class="user-box">
              <select name="item" value="" placeholder="Product Type">
                <option value="Stationery">Stationery</option>
                <option value="Hostel Essentials">Hostel Essentials</option>
              </select>
            </div>
            <div class="user-box">
                <input type="text"  name="file" class="custom-file">
            </div>
            <input type="submit" name="submit" class="glowbutton">
            </form>
        </div>
        <!-- selling form -->

      </div>
    </div>
  </section>


  <section class="second-page">
    <h1 class="top-title"><b> Want to Sell?</b></h1>
    <div class="row points">
      <div class="col-lg-4">
        <img class="selling-image" src="images\dust.jpg" alt="dust">
        <h4 class="image-caption">It could be catching dust in your closet</h4>
      </div>
      <div class="col-lg-4">
        <img class="selling-image" src="images\utensils1.webp" alt="no">
        <h4 class="image-caption">It could be something you don't like</h4>
      </div>
      <div class="col-lg-4">
        <img class="selling-image" src="images\shoes.jpg" alt="old">
        <h4 class="image-caption">It could be old and you've gotten a new one</h4>
      </div>
    </div>

    <div class="row solutions">
      <div class="solutions-content col-lg-6">
        <h2 class="bottom-title">We have a solution & here's what you get</h2>
        <p>TheSecondhandStore is a free, easy to use website which aims to be your one-stop destination for all your college related purchases</p>
        <ul class="solution-list">
          <li>Promote recycling by seeing your old things go to use instead of throwing them</li>
          <li>Sell smarter with one to one interaction with customers</li>
          <li>Satisfaction of providing a cheap and accessible alternative to all</li>
        </ul>
        <p><a href="#main" style="text-decoration:none;">Try it out →</a></p>
      </div>
      <div class="col-lg-6">
        <img class="selling-image4" src="images\selling1.jpg" alt="selling1">
      </div>
    </div>


  </section>
  <!-- content section ends -->

  <!-- Footer section starts  -->
  <div class="footer">
    <div class="contact">
      <p class="credit">Created with ❤️</p>
      <a href="#" class="contact">Contact Us at abc@mail.com</a>
    </div>

  </div>
  <!-- End of Footer section ends -->
  <script type="text/javascript" src="index.js">

  </script>
</body>
</html>