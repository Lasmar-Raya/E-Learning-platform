<?php
    session_start();
    include_once('header.php')
?>
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Course Details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Course Details</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">Semester <b>1</b></h2>
                                    <!-- /.course-details__title -->
                                    
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category1">First Year</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image1">
                                <!--<img   height="150" src="assets/images/purple.jpg" alt="">-->
                        
                              
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs1 list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                               
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                                           
                                    <table class="table1">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Module</th>
                                            <th>Cr??dits</th>
                                            <th>NB d'heures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Anglais</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Fran??ais</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Probabilit??s appliqu??es</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>04</td>
                                            <td>Circuits num??riques</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>05</td>
                                            <td>Electronique analogique</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>06</td>
                                            <td>Algorithmique num??rique</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>07</td>
                                            <td>Logique formelle</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>08</td>
                                            <td>Algorithmique, structures de donn??es et
                                                programmation C</td>
                                            <td>6</td>
                                            <td>90H</td>
                                        </tr> 
                                        <tr>
                                            <td>09</td>
                                            <td>Math??matique de l???ing??nieur</td>
                                            <td>4.5</td>
                                            <td>67.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>10</td>
                                            <td>Economie et gestion d???entreprise</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>TOTAL DES HEURES</td>
                                            <td>30</td>
                                            <td>450H CI</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                       <br><br>

                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span>450 h</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Modules: <span>10</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: <span>8 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>French</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->






        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">Semester <b>2</b></h2>
                                    <!-- /.course-details__title -->
                                    
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category2">First Year</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image2">
                                <!--<img   height="150" src="assets/images/purple.jpg" alt="">-->
                        
                              
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs2 list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                               
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Module</th>
                                            <th>Cr??dits</th>
                                            <th>NB d'heures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Th??orie des langages</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>02</td>
                                            <td>Transmission num??rique</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>03</td>
                                            <td>Introduction aux syst??mes d???exploitation et
                                                environnement Unix</td>
                                            <td>4.5</td>
                                            <td>67.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>04</td>
                                            <td>Architecture & micro processeurs</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>05</td>
                                            <td>Programmation web et multim??dia</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>06</td>
                                            <td>Algorithmique de graphes et optimisation</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>07</td>
                                            <td>Programmation orient??e objet</td>
                                            <td>4.5</td>
                                            <td>67.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>08</td>
                                            <td>Introduction aux syst??mes financiers et
                                                gestion bancaire</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>09</td>
                                            <td>Projet de programmation</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Anglais</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Fran??ais</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>TOTAL DES HEURES</td>
                                            <td>30</td>
                                            <td>450H CI</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.course-details__tab-content -->
                               
                                
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                       <br><br>

                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span>450 h</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Modules: <span>10</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: <span>8 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>French</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->


        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">Semester <b>3</b></h2>
                                    <!-- /.course-details__title -->
                                    
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category3">Second Year</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image3">
                                <!--<img   height="150" src="assets/images/purple.jpg" alt="">-->
                        
                              
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs3 list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Module</th>
                                            <th>Cr??dits</th>
                                            <th>NB d'heures</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>M??thodologie de conception de processeurs</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>R??seaux locaux</td>
                                            <td>4.5</td>
                                            <td>67.5H</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Syst??mes d???exploitation et programmation
                                                concurrente</td>
                                            <td>4.5</td>
                                            <td>67.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>04</td>
                                            <td>G??nie logiciel 1</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>05</td>
                                            <td>Conception et analyse d???algorithmes</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>06</td>
                                            <td>Principes et M??thodes statistiques</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>07</td>
                                            <td>Conception de bases de donn??es</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>08</td>
                                            <td>Analyse et conception orient??es objets</td>
                                            <td>3</td>
                                            <td>45H</td>
                                        </tr> 
                                        <tr>
                                            <td>09</td>
                                            <td>Anglais III</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr> 
                                        <tr>
                                            <td>10</td>
                                            <td>Communication</td>
                                            <td>1.5</td>
                                            <td>22.5H</td>
                                        </tr> 

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td></td>
                                            <td>TOTAL DES HEURES</td>
                                            <td>30</td>
                                            <td>450H CI</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                           
                               
                                </div><!-- /.course-details__tab-content -->
                               
                                
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                       <br><br>

                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span>450 h</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Modules: <span>10</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: <span>8 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>French</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->

        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">Semester <b>4</b></h2>
                                    <!-- /.course-details__title -->
                                    
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category4">Second Year</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image4">
                                <!--<img   height="150" src="assets/images/purple.jpg" alt="">-->
                        
                              
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs4 list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                               
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#review">Reviews</a>
                                </li>
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                <table>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Module</th>
                                        <th>Cr??dits</th>
                                        <th>NB d'heures</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>R??seaux informatiques</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Syst??mes de gestion de bases de donn??es</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Recherche op??rationnelle</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr> 
                                    <tr>
                                        <td>04</td>
                                        <td>G??nie logiciel 2 (sp??cification, validation,
                                            v??rification et qualit??)</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr> 
                                    <tr>
                                        <td>05</td>
                                        <td>Projets de conception et de d??veloppement</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr> 
                                    <tr>
                                        <td>06</td>
                                        <td>Cr??ation d???entreprises et Management des
                                            organisations</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr> 
                                    <tr>
                                        <td>07</td>
                                        <td>Introduction aux syst??mes embarqu??s</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr> 
                                    <tr>
                                        <td>08</td>
                                        <td>Analyse et conception orient??es objets</td>
                                        <td>3</td>
                                        <td>45H</td>
                                    </tr> 
                                    <tr>
                                        <td>09</td>
                                        <td>Anglais IV</td>
                                        <td>1.5</td>
                                        <td>22.5H</td>
                                    </tr> 
                                    <tr>
                                        <td>10</td>
                                        <td>Communication</td>
                                        <td>1.5</td>
                                        <td>22.5H</td>
                                    </tr> 

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td></td>
                                        <td>TOTAL DES HEURES</td>
                                        <td>24</td>
                                        <td>360H CI</td>
                                    </tr>
                                    </tfoot>
                                </table>

                                </div><!-- /.course-details__tab-content -->
                               
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">
                                
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Ing??nierie pour la Finance <b>IF</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>IF.4.1</td>
                                                <td>Evaluation d'entreprise et gestion de portefeuille</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.4.2</td>
                                                <td>Processus stochastiques et applications financi??res</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>R??seaux et Syst??mes R??partis <b>RSR</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>RSR.4.1</td>
                                                <td>Syst??mes d'exploitation temps r??el</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                            <tr>
                                                <td>RSR.4.2</td>
                                                <td>Syst??mes et applications r??partis</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Syst??mes et Logiciels Embarqu??s <b>SLE</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SLE.4.1</td>
                                                <td>Syst??mes d'exploitation temps r??el</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.4.2</td>
                                                <td>Syst??mes et applications r??partis</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Ing??nierie des Syst??mes Intelligents et D??cision <b>ISID</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ISID.4.1</td>
                                                <td>Programmation Fonctionnelle</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                            <tr>
                                                <td>ISID.4.2</td>
                                                <td>Syst??mes de R??solution de Probl??mes</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Ing??nierie du Logiciel et Syst??mes d???Information <b>ILSI</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ILSI.4.1</td>
                                                <td>Programmation Fonctionnelle</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                            <tr>
                                                <td>ILSI.4.2</td>
                                                <td>Architecture Logicielle</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Ing??nierie pour l???Image <b>II</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>II.4.1</td>
                                                <td>Introduction ?? l'Image</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                            <tr>
                                                <td>II.4.2</td>
                                                <td>Mod??lisation stochastique des images</td>
                                                <td>3</td>
                                                <td>45H</td>
                                            </tr>
                                        </tbody>
                                </table>
                                </div><!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                       <br><br>

                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span>450 h</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Modules: <span>10</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: <span>8 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>French</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->
        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">Semester <b>5</b></h2>
                                    <!-- /.course-details__title -->
                                    
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category5">Third Year</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image5">
                                <!--<img   height="150" src="assets/images/purple.jpg" alt="">-->
                        
                              
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs5 list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                               
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#review">Reviews</a>
                                </li>
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                   
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>Choix de 2 modules parmi les suivants</b> </th>
                                            <th>Cr??dit</th>
                                            <th>NB d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TC.5.1</td>
                                                <td>S??curit?? Informatique</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>TC.5.2</td>
                                                <td>Intelligence Artificielle</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>TC.5.3</td>
                                                <td>Module Compl??mentaire</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                        </tbody>
                                        <thead>
                                            <th colspan="2"><b>Choix de 3 modules parmi les suivants</b> </th>
                                            <th>Cr??dit</th>
                                            <th>Nb d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TC.5.4</td>
                                                <td>Gestion de projets</td>
                                                <td></td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>TC.5.5</td>
                                                <td>Anglais cibl??</td>
                                                <td></td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>TC.5.6</td>
                                                <td>Module Compl??mentaire</td>
                                                <td></td>
                                                <td>15H</td>
                                            </tr>
                                        </tbody>
                                    </table>

                           
                               
                                </div><!-- /.course-details__tab-content -->
                               
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">
                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Ing??nierie pour la Finance IF</th>
                                            <th>Cr??dit</th>
                                            <th>Nb.d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr><td><b>Modules de 30 Heures</b></td></tr>
                                            <tr><td><b>Choix de 6 modules parmi les suivants</b></td></tr>
                                            <tr>
                                                <td>IF.5.1</td>
                                                <td>M??thodes de Monte-Carlo et simulation de mod??les financiers</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.2</td>
                                                <td>EDP int??gro-diff??rentielle pour les mod??les financiers</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.3</td>
                                                <td>March??s financiers</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.4</td>
                                                <td>Gestion Bancaire</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.5</td>
                                                <td>Syst??mes et applications r??parties</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.6</td>
                                                <td>Syst??mes intelligents d???aide ?? la d??cision</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.7</td>
                                                <td>Module Compl??mentaire Math??matiques pour la finance</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.8</td>
                                                <td>Module Compl??mentaire Finance</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.9</td>
                                                <td>Module Compl??mentaire Informatique</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr><td><b>Choix de 2 modules parmi les suivants</b></td></tr>
                                            <tr>
                                                <td>IF.5.10</td>
                                                <td>Mod??lisation du risque et gestion dynamique des risques financiers</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.11</td>
                                                <td>Module compl??mentaire math??matiques pour la Fiance</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.12</td>
                                                <td>Finance internationale et gestion de portefeuille internationale</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.13</td>
                                                <td>Module compl??mentaire finance</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.14</td>
                                                <td>Calcul parall??le en finance</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.15</td>
                                                <td>Module Compl??mentaire Informatique</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr><td><b>Modules de 15 Heures</b></td></tr>
                                            <tr><td><b>Modules obligatoires</b></td></tr>
                                            <tr>
                                                <td>IF.5.16</td>
                                                <td>M??thodes num??riques d'optimisation en finance</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.17</td>
                                                <td>Projet simulation de march??s financier</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.18</td>
                                                <td>Projet D??veloppement d'Applications communicantes</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr><td><b>Choix de 4 modules parmi les suivants</b></td></tr>
                                            <tr>
                                                <td>IF.5.19</td>
                                                <td>Statistique inf??rentielle avanc??e</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.20</td>
                                                <td>S??ries temporelles</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.21</td>
                                                <td>Mod??les stochastiques avanc??s et applications financi??res</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.22</td>
                                                <td>M??thodes avanc??es des statistiques multi-vari??es</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.23</td>
                                                <td>Risque de cr??dit</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.24</td>
                                                <td>Comptabilit?? des instruments financiers</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.25</td>
                                                <td>Etude de cas (Salle de march??, assurance,banque)</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.26</td>
                                                <td>Finance quantitative</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.27</td>
                                                <td>Architectures orient??es Services SOA</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.28</td>
                                                <td>Application d'int??gration technologiques</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.29</td>
                                                <td>Ing??nierie des syst??mes de fiance</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.30</td>
                                                <td>S??curit?? des syst??mes Financiers</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.31</td>
                                                <td>Module Compl??mentaire Math??matiques pour la finance</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.32</td>
                                                <td>Module compl??mentaire Finance</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.33</td>
                                                <td>Module compl??mentaire Informatique</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>   
                                        </tbody>
                                    </table>

                                    <table>
                                        <thead>
                                            <th colspan="2"><b>FILIERE :</b>Syst??mes et Logiciels Embarqu??s <b>SLE</b></th>
                                            <th>Cr??dit</th>
                                            <th>Nb.d'heures</th>
                                        </thead>
                                        <tbody>
                                            <tr><td><b>Modules de 30 Heures</b></td></tr>
                                            <tr><td><b>Choix de 6 modules parmi les suivants</b></td></tr>
                                            <tr>
                                                <td>SLE.5.1</td>
                                                <td>Conception et validation des syst??mes temps r??el</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.2</td>
                                                <td>Electronique pour l'embarqu??</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.3</td>
                                                <td>Int??gration des syst??mes</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.4</td>
                                                <td>Syst??mes ?? base de microcontr??leurs</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.5</td>
                                                <td>Technologies de traitement du signal et image</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.6</td>
                                                <td>Robotique et soft computing</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.7</td>
                                                <td>Module Compl??mentaire 1</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.8</td>
                                                <td>Module Compl??mentaire 2</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr><td><b>Choix de 2 modules parmi les suivants</b></td></tr>
                                            <tr>
                                                <td>SLE.5.9</td>
                                                <td>Codesign</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.10</td>
                                                <td>R??seaux san fil</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.11</td>
                                                <td>Simulation ?? ??v??nements discrets</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.12</td>
                                                <td>Architectures avanc??es et programmation parall??le</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.13</td>
                                                <td>Module Compl??mentaire 3</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.14</td>
                                                <td>Module Compl??mentaire 4</td>
                                                <td>2</td>
                                                <td>30H</td>
                                            </tr>
                                            <tr><td><b>Modules de 15 Heures</b></td></tr>
                                            <tr><td><b>Modules obligatoires</b></td></tr>
                                            <tr>
                                                <td>SLE.5.15</td>
                                                <td>Projet pratique du syst??me</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.16</td>
                                                <td>Projet d'int??gration</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.17</td>
                                                <td>Projet microcontr??leurs</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr><td><b>Choix de 4 modules parmi les suivants</b></td></tr>
                                            <tr>
                                                <td>SLE.5.18</td>
                                                <td>Mod??les formels du temps et du parall??lisme</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.19</td>
                                                <td>Mod??lisation des syst??mes temps r??el</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.20</td>
                                                <td>Programmation parall??le</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.21</td>
                                                <td>Optimisation des programmes</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.22</td>
                                                <td>soc</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.23</td>
                                                <td>Commande num??rique de processus</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.24</td>
                                                <td>Projet asservissement</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.25</td>
                                                <td>Informatique ??motionnelle</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.26</td>
                                                <td>R??seaux de capteurs</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.27</td>
                                                <td>S??curit?? des syst??mes embarqu??s</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.28</td>
                                                <td>Tol??rance aux fautes</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.29</td>
                                                <td>Interface homme machine</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.30</td>
                                                <td>Expertise industrielle</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.31</td>
                                                <td>Cryptographie</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>IF.5.32</td>
                                                <td>Bus de communications</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.33</td>
                                                <td>CAOs</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.34</td>
                                                <td>Vanets</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.35</td>
                                                <td>Instruments et mesure</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.36</td>
                                                <td>Module compl??mentaire 1</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>
                                            <tr>
                                                <td>SLE.5.37</td>
                                                <td>Module compl??mentaire 2</td>
                                                <td>1</td>
                                                <td>15H</td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                </div><!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                       <br><br>

                        <div class="course-details__meta">
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: <span>450 h</span>
                            </a><!-- /.course-details__meta-link -->
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Modules: <span>10</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: <span>8 hours</span>
                            </a><!-- /.course-details__meta-link -->
                            
                            <a href="#" class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: <span>French</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->









        <?php include_once('footer.php')?>