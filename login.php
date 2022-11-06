<?php
    session_start();
    require_once ('./db.php');
    require_once ('log.php');

    $database = new ConnectDB("iwp","login");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TheSecondhandStore</title>
  <link rel="icon" href="images/icon.png">

 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <!-- custom css file link  -->
  <link rel="stylesheet" href="login.css">

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
      <a href="login.php" class="logo">The<span>SecondhandStore</span></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </nav>
  </header>
  <!-- header section ends -->

<!-- body section starts -->
<body>
  <section>
    <div class="container">
      <div class="user signinBx">
        <div class="imgBx"><img src="images\lilac background.jpg" alt="" /></div>
        <div class="formBx">
          <form action="log.php" method="POST">
            <h2>Sign In</h2>
            <input type="text" name="uname" placeholder="Username" />
            <input type="password" name="passw" placeholder="Password" />
            <input type="submit" name="login" value="Login" onsubmit="sub()"/>
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="log.php" method="POST">
            <h2>Create an account</h2>
            <input type="text" name="new_uname" placeholder="Username" />
            <input type="email" name="email" placeholder="Email Address" />
            <input type="password" name="new_passw" placeholder="Create Password" />
            <input type="password" name="" placeholder="Confirm Password" />
            <input type="submit" name="signin" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          
          </form>
        </div>
        <div class="imgBx"><img src="images\essentials.jpg" alt="" /></div>
      </div>
    </div>
  </section>

  <script src="login.js" charset="utf-8"></script>
</body>
<!-- body section ends -->

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
