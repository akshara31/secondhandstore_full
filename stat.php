<?php
function component($p_id,$p_name,$p_price,$p_desc,$p_cond,$p_seller,$p_contact,$p_type,$p_url){
    $element = "
    <div id=\"Carousel$p_id\" class=\"row col-lg-4 col-md-6 pt-5 justify-content-center carousel slide\" data-interval=\"false\">
          <div class=\"card-l carousel-inner\">
          <form action = \"stationery.php\" method=\"post\">
            <div class=\"carousel-item active\">
              <img src=\"$p_url\" class=\"card-img-top\" alt=\"$p_name\">
              <h5 class=\"card-title\">$p_name</h5>
              <p class=\"card-text\">price starts from <span>$p_price</span></p>
              
              <button class=\"btn\" name=\"add\">add to cart</button>
              
              <input type='hidden' name='product_id' value='$p_id'>

            </div>
            <div class=\"carousel-item\">
              <h5 class=\"card-text\">$p_desc</h5>
              <br>
              <br>
              <p class=\"desc$p_id\">CONDITION:</p>
              <p>$p_cond</p>
              <br>
              <p class=\"desc$p_id\">SELLER DETAILS:</p>
              <p>$p_seller $p_contact</p>
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Carousel$p_id\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Carousel$p_id\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </button>
            </button>
            </form>
          </div>
          
        </div>  
    ";
    echo $element;
}
?>
