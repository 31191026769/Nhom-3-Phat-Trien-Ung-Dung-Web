<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
        <?php 
            include("config/config.php");
            //include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            //include("modules/footer.php");
        ?>
    </div>
</body>
</html>