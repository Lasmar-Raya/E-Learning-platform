<?php 
    include 'admin/inc/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"> 
    <title>SEMESTRE 4</title>
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
    <div class="preloader"><span></span></div>
    
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
            <div id='user_l'  style=" height:1100px; background-image: url(assets/images/s4.jpg) ; background-size:cover;" >
                <center><img src='assets/images/semestre4.gif'/></center>
                <h1> Semestre 4</h1>
                <h2> Tronc Commun</h2>
                <ul>
                <?php
                    $get_cat = $con->prepare("select * from modules where semestre='4'");
                    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
                    $get_cat->execute();
                    while($row = $get_cat->fetch(PDO:: FETCH_ASSOC))
                    { echo "  <li> <a href='semestre1.php?module_id=".$row['id']."' style='text-decoration: none; color: white;'>".$row['module']."</a></li>";}
                    ?>
                </ul>
                <h2> Filiere</h2>
                <ul>
                    <li><a href='semestre4.php?IF'><i class="far fa-hand-point-right"></i> IF</a></li>
                    <li><a href='semestre4.php?SLE'><i class="far fa-hand-point-right"></i>SLE</a></li>
                    <li><a href='semestre4.php?RSR'><i class="far fa-hand-point-right"></i>RSR</a></li>
                    <li><a href='semestre4.php?ISID'><i class="far fa-hand-point-right"></i>ISID</a></li>
                    <li><a href='semestre4.php?ILSI'><i class="far fa-hand-point-right"></i>ILSI</a></li>
                    <li><a href='semestre4.php?II'><i class="far fa-hand-point-right"></i>II</a></li>
                </ul>
            </div>
            <div id='user_r' >
                <br>
                <a href="cursus.php" style="font-size:20px; background-color:#106ba0; border-radius:50%; color:white; padding: 5px 15px ;"> <i class="fa fa-chevron-left"></i></a>
                <br>
                 <center><div style="color:white; box-shadow: 8px 8px 30px #000; background-color:#106ba0; font-family:satisfy; width:50%; border-radius:15px;" ><h1> Semestre 4 </h1></div></center>
                 <?php 
                    if(isset($_GET['module_id']))
                    {include'module.php';}    
                ?>

            </div>
        </div>














    </div><!-- /.page-wrapper -->

    

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>
</body>


<!-- Mirrored from layerdrops.com/kipso/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 13:09:56 GMT -->
</html>