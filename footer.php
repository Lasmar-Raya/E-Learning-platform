<footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title">About Us</h2><!-- /.footer-widget__title -->

                                <?php
                                    include 'admin/inc/db.php';
                                    $get_link = $con->prepare('select * from about');
                                    $get_link->setFetchMode(PDO:: FETCH_ASSOC);
                                    $get_link->execute();
                                    $row=$get_link->fetch();

                                    echo"
                                    <p>".$row['paragraph']."</p> 
                                    
                                    ";?>
                                <!-- <p>ENSI e-learning platform was founded by LASMAR RAYA and MESSOUSSI INES with a vision
                                 of providing life-transforming learning experiences to any ENSI student, anywhere.
                                 Every course in our platform is taught by top teachers, tens of free courses give
                                  you access to on-demand video lectures, homework exercises and projects. To sum up,
                                   we envision a world where anyone, anywhere can transform their life by accessing
                                   the world's best learning experience.</p> -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Adresse</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                   
                                    
                                   
                                       <div class="place">
                                           <span class="fas fa-map-marker-alt"></span>
                                           <?php
                                                include 'admin/inc/db.php';
                                                $get_link = $con->prepare('select * from contact');
                                                $get_link->setFetchMode(PDO:: FETCH_ASSOC);
                                                $get_link->execute();
                                                $row=$get_link->fetch();

                                                echo"
                                                <span>".$row['addr']."</span> 
                                                
                                                ";?>
                                           <!-- <span class="text"> Campus Universitaire de la Manouba, 2010   Manouba, Tunisia</span> -->
                                       </div>
                                       <div class="phone">
                                           <span class="fas fa-phone-alt"></span>
                                           <?php
                                                include 'admin/inc/db.php';
                                                $get_link = $con->prepare('select * from contact');
                                                $get_link->setFetchMode(PDO:: FETCH_ASSOC);
                                                $get_link->execute();
                                                $row=$get_link->fetch();

                                                echo"
                                                <span>".$row['phn']."</span> 
                                                
                                                ";?>
                                       </div>
                                        <div class="email">
                                            <span class="fas fa-envelope"></span>
                                            <?php
                                                include 'admin/inc/db.php';
                                                $get_link = $con->prepare('select * from contact');
                                                $get_link->setFetchMode(PDO:: FETCH_ASSOC);
                                                $get_link->execute();
                                                $row=$get_link->fetch();

                                                echo"
                                                <span>".$row['email']."</span> 
                                                
                                                ";?>
                                        </div>


                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <h2 class="footer-widget__title">Contact Us </h2><!-- /.footer-widget__title -->
                                <form action="#">
                                    <div class="email">
                                        <div class="text">Email </div>
                                        <input class="10" type="email" required>
                                    </div>
                                    <div class="msg">
                                        <div class="text">Message </div>
                                        <textarea class="10"row="2" cols="24" required></textarea>
                                    </div>
                                     <button type="Submit" class="btn-submit">Send</button>
                                   
                                </form>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2020  <a href="#">ENSI</a></p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <!-- <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a> -->
                        <?php
                        include 'admin/inc/db.php';
                        $get_link = $con->prepare('select * from contact');
                        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
                        $get_link->execute();
                        $row=$get_link->fetch();

                        echo"
                        <a href='https://www.email.com/".$row['email']."' target='_blank'><i class='fa fa-envelope'></i></a>
                       
                        <a href='".$row['fb']."' target='_blank'><i class='fab fa-facebook-square'></i></a>
                        
                        ";?>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/theme.js"></script>
    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
   
    <!-- <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script> -->
    <!-- <script src="assets/js/TweenMax.min.js"></script> -->
    
    <!-- <script src="assets/js/jquery.magnific-popup.min.js"></script> -->
    <!-- <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->
    
</body>
</html>