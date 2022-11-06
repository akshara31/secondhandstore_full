<?php
    session_start();
    require_once ('./db.php');
    require_once ('ess.php');

    $database = new ConnectDB("iwp","essentials");
    
    if (isset($_POST['add'])){
        /// print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "product_id");
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart..!')</script>";
                echo "<script>window.location = 'essentials.php'</script>";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="essentials.css">

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

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
      <header class="header">
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top shadow-sm">
            <img id="mainLogo" src="images/icon.png">
            <a href="home.php" class="logo">The<span>SecondhandStore</span></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks"
                aria-label="toggle navigation">
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

    <div class = "container">
            <img src="images/bgpic3.webp" height="500rem" width="100%">
    </div>

    
    <section class="container-fluid">
        <div class="row justify-content-center">
            
        <div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getEData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['Product_ID'],$row['Product_Name'], $row['Product_Price'], $row['Product_Desc'], $row['Product_Condition'], $row['Product_Seller'], $row['Product_Contact'], $row['Product_Type'], $row['Product_URL'] );
                }
            ?>
        </div>
</div>
            </div>
        </section>
    <!-- Footer section starts  -->
    <div class="footer">
        <div class="contact">
            <p class="credit">Created with ❤️</p>
            <a href="#" class="contact">Contact Us at abc@mail.com</a>
        </div>

    </div>
    <!-- End of Footer section ends -->
</body>

</html>