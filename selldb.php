<?php

        $conn = mysqli_connect("localhost", "root", "mysql", "iwp");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)

         $pname = $_REQUEST['p_name'];
         $pprice = $_REQUEST['p_price'];
         $pdesc = $_REQUEST['p_desc'];
         $pcond = $_REQUEST['p_cond'];
         $pseller = $_REQUEST['p_seller'];
         $pcontact = $_REQUEST['p_contact'];
         $ptype = $_POST['item'];
         $purl = $_REQUEST['file'];

        if (isset($_POST['submit'])) {
 
            $db = mysqli_connect("localhost", "root", "mysql", "iwp");
         
            // Get all the submitted data from the form
            $sql = "INSERT INTO essentials(Product_Name,Product_Price,Product_Desc,Product_Condition,Product_Seller,Product_Contact,Product_Type,Product_URL) 
                    VALUES ('$pname','$pprice','$pdesc','$pcond','$pseller','$pcontact','$ptype','$purl')";
           
           // Execute query
            if(mysqli_query($db, $sql)){
                header("Location: stationery.php"); 
            }
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
        