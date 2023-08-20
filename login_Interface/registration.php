<?php
require 'function.php';
require 'sessions.php';
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
$register = new Register();
if(isset($_POST["submit"])){
    $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);
    if($result == 1){

        $_SESSION["SuccessMessage"] = "Registration Successful";
            Redirect_to("Registration.php");
    }
    elseif($result == 10){
         $_SESSION["ErrorMessage"] = "Username or Email has already taken";
            Redirect_to("Registration.php");
    }
    elseif($result == 100){
        $_SESSION["ErrorMessage"] = "Passwords do not match";
            Redirect_to("Registration.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/registrationcss.css">

        <title>Registration</title>
    </head>

    <body>


        <div class="container">
            <div class="box">
                <?php
        echo ErrorMessage();
        echo SuccessMessage();
        ?>
            </div>
            <h1>Registration</h1>
            <form class="" action="" method="post" autocomplete="off">
                <div class="form-control">
                    <label for="">Name:</label>
                    <input type="text" name="name" value="" required> <br>
                </div>
                <div class="form-control">
                    <label for="">Username:</label>
                    <input type="text" name="username" value="" required> <br>
                </div>
                <div class="form-control">
                    <label for="">Email:</label>
                    <input type="email" name="email" value="" required> <br>
                </div>
                <div class="form-control">
                    <label for="">Password:</label>
                    <input type="password" name="password" value="" required> <br>
                </div>
                <div class="form-control">
                    <label for="">Confirm Password:</label>
                    <input type="password" name="confirmpassword" value="" required> <br>
                </div>

                <button type="submit" name="submit">Register</button>
            </form>

            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>

    </body>

</html>
