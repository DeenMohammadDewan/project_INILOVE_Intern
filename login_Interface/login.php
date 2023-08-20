<?php
require 'function.php';
require 'sessions.php';
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
$login = new Login();

if(isset($_POST["submit"])){
    $result = $login->login($_POST["usernameemail"], $_POST["password"]);
    if($result == 1){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $login -> idUser();
        header("Location: index.php");
    }
    elseif($result == 10){
        $_SESSION["ErrorMessage"] = "Wrong password";
            Redirect_to("login.php");
    }
    elseif($result == 100){
        $_SESSION["ErrorMessage"] = "User not Registered";
            Redirect_to("login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/logincss.css">
        <title>Login</title>
    </head>

    <body>
        <div class="container">
            <div class="box">
                <?php
         echo ErrorMessage();
         echo SuccessMessage();
        ?>
            </div>
            <h1>Login</h1>
            <form class="" action="" method="post" autocomplete="off">
                <div class="form-control">
                    <label for="">Username or Email: </label>
                    <input type="text" name="usernameemail" value="" required>
                </div>
                <div class="form-control">
                    <label for="">Password: </label>
                    <input type="password" name="password" value="" required>
                </div>
                <button type="submit" name="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="registration.php">Register</a></p>
        </div>


    </body>

</html>
