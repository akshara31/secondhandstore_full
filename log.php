<?php
        $conn = mysqli_connect("localhost", "root", "mysql", "iwp");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ".mysqli_connect_error());        }

        if (isset($_POST['login'])) {
            $user = $_POST['uname'];
            $pass = $_POST['passw'];

            // Get all the submitted data from the form
            $sql = "SELECT uname FROM login WHERE uname = '$user' AND passw = '$pass'";
           
            $result = mysqli_query($conn, $sql);
            $numrows = mysqli_num_rows($result);
            if($numrows > 0)
            {
            header("Location: home.php"); 
            }
            else{

            echo "<script>alert('Invalid Login Credentials! Please Try Again!');
                  document.location = 'login.php'</script>";            } 
        }

        else if(isset($_POST['signin'])){
            $newuser = $_POST['new_uname'];
            $newpass = $_POST['new_passw'];
            $email = $_POST['email'];

            //Adding New User
            $sql = "INSERT INTO login(uname,passw,email)
                    VALUES('$newuser','$newpass','$email')";
            
            if(mysqli_query($conn, $sql)){
                echo "Please Continue to Login";
                header("Location: login.php"); 
            }
            else{
                echo "Error in Registering New User";
            }
        }

        // Close connection
        mysqli_close($conn);
       ?>