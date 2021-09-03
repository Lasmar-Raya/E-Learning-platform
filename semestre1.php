<?php 
    
    include 'admin/inc/db.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"> 
        <title>SEMESTRE 1</title>
        <link rel="icon"  href="assets/images/favicons/2.png">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&amp;display=swap" >
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
        <link rel="stylesheet" href="assets/plugins/kipso-icons/style.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/vegas.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Stylesheet -->

    </head>

    <body>
        <div class="page-wrapper">
            <div class="topbar-one ">
                <div class="container">
                    <div class="topbar-one__left">
                        <a href="#">webmaster@ensi.rnu.tn</a>
                        <a href="#">( +216 ) 71.600.444</a>
                    </div>
                    <div class="topbar-one__right">
                        
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>

            
            <div id="wrap">
                <div id='user_l' style="background-image: url(assets/images/s1.jpg) ; background-size:cover;">
                    <center><img src='assets/images/semestre1.gif'/></center>
                    <h1> Semestre 1</h1>
                    <ul>
                    <?php
                    $get_cat = $con->prepare("select * from modules where semestre='1'");
                    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
                    $get_cat->execute();
                    while($row = $get_cat->fetch(PDO:: FETCH_ASSOC))
                    { echo "  <li> <a href='semestre1.php?module_id=".$row['id']."' style='text-decoration: none; color: white;'>".$row['module']."</a></li>";}
                    ?>
                    </ul>
                    
                </div>
                <div id='user_r' >
                    <br>
                    <a href="cursus.php" style="font-size:20px; background-color:#b11977; border-radius:50%; color:white; padding: 5px 15px ;"> <i class="fa fa-chevron-left"></i></a>
                    <br>
                    <center><div style="color:white; box-shadow: 8px 8px 30px #000; background-color:#b11977; font-family:satisfy; width:50%; border-radius:15px;" ><h1> Semestre 1 </h1></div></center>

                    <?php 
                        if(isset($_GET['module_id']))
                        {include'module.php';}    
                    ?>

                </div>
            </div>


        </div>

    </body>
 </html>