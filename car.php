<?php
function cartElement($p_url,$p_name, $p_price, $p_id,$p_seller){
    $element = "

    <form action=\"cart.php?action=remove&id=$p_id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$p_url alt=\"Image1\" class=\"img-fluid\"
                                style=\"margin-top: 1rem\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$p_name</h5>
                                <small class=\"text-secondary\">Seller: $p_seller</small>
                                <h5 class=\"pt-2\">Rs $p_price /-</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\"
                                style=\"margin-bottom: 1rem\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\" name=\"down\" ><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" name=\"qty\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\" name=\"up\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br><br>

    ";
    echo  $element;
}