<!DOCTYPE html>
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
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery.js"></script>
  <script type="text/javascript" src="home.js"></script>

</head>

<body>

  <!-- header section starts  -->
  <header class="header">
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top shadow-sm">
      <img id="mainLogo" src="images/icon.png">
      <a href="home.php" class="logo">The<span> SecondhandStore</span></a>
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

  <!--  -->
  <!-- content starts here -->
  <main>
    <!-- Title / About Us -->
    <div class="row" id="row1">
      <div class="col-lg-6">
        <h1 class="big-heading">In need of essentials for college but can't afford?</h1>
        <h1 id="mh" onmouseover="mouseen()" onmouseleave="mousele()">That's what we're here for.</h1>
        <p class="aboutus">We're a small second hand business especially aimed towards college going students. As college students ourselves, we understand the difficulty of fidning our essentials for college at the right price.
          That's exactly what we're here for. At TheSecondhandStore, we provide a wide range of second-hand products at very reasonable prices that you just won't be able to avoid!
       </p>
        <a href="essentials.php">
          <button type="button" class="btn btn-dark btn-lg" id="mb">Hostel Essentials</button>
        </a>
        <a href="stationery.php">
          <button type="button" class="btn btn-dark btn-lg" id="mb">Stationery</button>
        </a>
      </div>

      <div class="col-lg-6">
        <img class="title-image" src="images/heart.png">
      </div>
    </div>
    <!-- End of Title / About Us -->


    <!-- Categories -->
    <div class="category">
      <div class="row">
        <div class="def col-lg-6">
          <a href="#" class="link-mid">
            <h1 id="hostel" class="big-heading">Hostel Essentials</h1>
          </a>
          <p class="aboutus">This is your one stop shop for all last minute hostel essentials. Buy and sell second hand hostel items in and around VIT.
            Also shop from well kept / Refurbished hostel items online at our store. Good quality products at the best price designed just for you
            at minimal prices so you can have a budget aesthetic.
          </p>
          <img src="images/host.png" class="fimg" alt="" height="100" width="100">
        </div>

        <div class="def col-lg-6">
          <a href="#" class="link-mid">
              <h1 id="station" class="big-heading">Stationery</h1>
          </a>
          <p class="aboutus">Find the best Stationery price! Second-hand Stationery for sale in VIT. Buy and sell second hand Stationery items in and around VIT.
            Shop for Refurbished / Used gifts and stationery products online in VIT at TheSecondhandStore. Buy gifts and stationery for your college needs at best price.</p>
          <img src="images/stat.png" class="fimg" alt="" height="100" width="100">
        </div>
      </div>
    </div>
    <!--End of Categories -->


    <!-- Features -->
    <section class="white-section" id="features">
      <div class="container-fluid">
        <div class="row" id="row2">
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3 class="feature-title">Easy to use.</h3>
            <p>So easy to use</p>
          </div>

          <div class="feature-box col-lg-4">
            <i class="icon fas fa-bullseye fa-4x"></i>
            <h3 class="feature-title">Elite Clientele</h3>
            <p>We have all everything you could possibly think of.</p>
          </div>

          <div class="feature-box col-lg-4">
            <i class="icon fas fa-heart fa-4x"></i>
            <h3 class="feature-title">Guaranteed to work.</h3>
            <p>Find what you need or your money back.</p>
          </div>
        </div>
      </div>
    </section>
    <!--End of Features -->

    <!-- Reviews (Testimonials) -->
    <section class="colored-section " id="testimonials">
      <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active container-fluid">
            <p class="testimonial-text">"I no longer have to go around searching for a substantial pricing. reasonable prices with good quality products!"</p>
            <center>
              <img class="testimonial-image" id="fimg" src="images/user.png">
            </center>
            <center>
              <em>B Block, VIT Ladies Hostel</em>
            </center>
          </div>
          <div class="carousel-item container-fluid">
            <p class="testimonial-text">"I love this site! I've found a solution to all my needs!"</p>
            <center>
              <img class="testimonial-image" id="fimg" src="images/user.png">
            </center>
            <center>
              <em>L Block, VIT Mens Hostel</em>
            </center>
          </div>
          <div class="carousel-item container-fluid">
            <p class="testimonial-text">"Very User Friendly and Great Interface! Brilliant Work with the thought behind this:)" </p>
            <center>
              <img class="testimonial-image" id="fimg" src="images/user.png">
            </center>
            <center>
              <em>D Annex Block, VIT Mens Hostel</em>
            </center>
          </div>
        </div>
        <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>
    <!-- End of Reviews (Testimonials) -->
    
  </main>

  <!-- Footer section starts  -->
  <div class="footer">
    <div class="contact">
      <p class="credit">Created with ❤️</p>
      <button type="button" id="ontop" class="btn btn-sm" onclick="toTop()">Back to Top</button>
    </div>
  </div>
  <!-- End of Footer section ends -->

</body>
</html>
