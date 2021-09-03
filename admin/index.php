<?php
    session_start();
    if(!$_SESSION['mdp']){
        header('location:admin_login.php'); //si il accéde à index.php avant se connecter on le méne à login
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon"  href="../assets/images/favicons/2.png">
    <title>Admin | Home</title>
</head>
<body>
    <?php
        include "inc/header.php " ;
        include "inc/body_left.php";
        include "inc/body_right.php";
    ?>
</body>
</html>