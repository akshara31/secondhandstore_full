<?php
function component($p_id,$p_name,$p_price,$p_desc,$p_cond,$p_seller,$p_contact,$p_type,$p_url){

    $element = "
    <div class=\"row col-lg-4 col-md-6\">
                <div class=\"col pt-5\">
                <form action = \"essentials.php\" method=\"post\">
                    <div class=\"card\">
                        <div class=\"card-head\">
                            <ul class=\"nav nav-tabs card-header-tabs\">
                                <li class=\"nav-items\">
                                
                                    <a href=\"#Image$p_id\" class=\"nav-link active\" data-bs-toggle=\"tab\">Image</a>
                                </li>
                                <li class=\"nav-items\">
                                    <a class=\"nav-link\" href=\"#Review$p_id\" data-bs-toggle=\"tab\">Details</a>
                                </li>
                                <li class=\"nav-items\">
                                    <a class=\"nav-link\" href=\"#Description$p_id\" data-bs-toggle=\"tab\">Desc</a>
                                </li>
                            </ul>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"Image$p_id\">
                                    <div class=\"card-img-top\">
                                    <img src=\"$p_url\" class=\"d-block w-100 image\" alt=\"$p_name\">
                                       
                                    </div>
                                    
                                    <h5 class=\"text\">$p_name</h5>
                                    <p class=\"card-text\"><b>PRICE: </b>$p_price
                                    </p>
                                </div>

                                <div class=\"tab-pane fade\" id=\"Review$p_id\">
                                    <p class=\"text\">Condition:</p><p class=\"nb\">$p_cond</p>
                                    <p class=\"text\">Product Type:</p> <p class=\"nb\">$p_type</p>
                                </div>

                                <div class=\"tab-pane fade\" id=\"Description$p_id\">
                                    <p class=\"text\">Seller Name:</p> <p class=\"nb\">$p_seller</p>
                                    <p class=\"text\">Seller Phone No:</p> <p class=\"nb\">$p_contact</p>
                                      <i class=\"card-text\">$p_desc</i>
                                    
                                  </p>
                                </div>
                                                          
                                   <center> <button class=\"btn\" name=\"add\">Add to Cart</button> </center>
                                   <input type='hidden' name='product_id' value='$p_id'>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    ";
    echo $element;
}
?>