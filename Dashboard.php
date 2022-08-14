<?php
include_once("function.php");
include_once("controller.php");
checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    Welcome Back <?php echo $_SESSION["login"]; ?>...

    <p><a href="logout.php">Logout</a></p>




</body>
</html>