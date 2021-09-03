<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"> 
    <title>Online Education Learning</title>
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
                <div id="date">
                
                </div>
                <div class="topbar-one__right">
                    <a href="signup.php">Signup</a>
                    <a href="signin.php">Sign in</a>
                </div>
            </div>
        </div>


        <header class="site-header site-header__header-one ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    
                    
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/ensi.jpg" class="main-logo" width="120" height="70" alt="Awesome Image" />
                        </a>
                        <div class="header__social">
                        <?php
                        include 'admin/inc/db.php';
                        $get_link = $con->prepare('select * from contact');
                        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
                        $get_link->execute();
                        $row=$get_link->fetch();

                        echo"
                        <a href='".$row['email']."' target='_blank'><i class='fa fa-envelope'></i></a>
                       
                        <a href='".$row['fb']."' target='_blank'><i class='fab fa-facebook-square'></i></a>
                        
                        ";?>
                        </div>
                        <button  class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div>

                    
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                                <a href="index.php">Home</a>
                            </li>
                            
                            <li>
                                <a href="cursus.php">Program</a>
                                <ul class="sub-menu">
                                    <li><a href="cursus.php">Cursus</a></li>
                                    <li><a href="cursus-details.php">Cursus Details</a></li>
                                </ul>
                            </li>
                            <li>
                                
                            </li>
                            <li>
                                <a href="motivation.php">Motivation</a>
                                <ul class="sub-menu">
                                    <li><a href="motivation.php">Motivation</a></li>
                                    <li><a href="improve.php">Improve Your Soft Skills</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        <div>


        </div>



<?php
     include 'footer.php';
?>