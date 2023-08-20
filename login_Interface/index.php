<?php
require 'function.php';
$select = new Select();
if(isset($_SESSION["id"])){
    $user = $select->selectUserById($_SESSION["id"]);
}
else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/indexcss.css">
        <title>Index</title>
    </head>

    <body>
        <div>
            <h2>Welcome <?php echo $user["name"]; ?></h2>
            <a href="logout.php"><button>Logout</button></a>
        </div>
    </body>

</html>
