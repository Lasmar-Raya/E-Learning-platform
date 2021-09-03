<?php 
session_start();
$msg="";
$source="mysql:host=localhost;dbname=research";
$login ="root";
$mdp ="";

try
{
    $con=new PDO($source,$login,$mdp);
    
}
catch(PDOException $e)
{
    $error_message= $e->getMessage();
    echo $error_message;
    exit();
}



if (isset($_POST['submit']))
{
    $name =$_POST['name'] ;
    $email = $_POST['email'] ;
    $message = $_POST['message'] ;
    $dt=date('Y-m-d H:i:s');
    if( $name == "" || $email == "" || $message =="")
    {
        $msg = "Please check your INPUTS !" ;
    }
    else
    {
        $con->query("INSERT INTO messages (name, email, question,answer, date)
                   VALUES ('$name', '$email', '$message', '','$dt') ");
        $msg="Question sent ";
          
        $to="ensiplatform@gmail.com";
        $subject = "Thanks \t". $name." for your confidence";
        $text=" Your question was : \n".$message."\n \n".$dt ;
    
        mail($email,$subject,$text);
           
    }        


}

?>
<?php
    
    include_once('header.php')
?>


        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>
                </ul>
                <h2 class="inner-banner__title">Contact</h2>
            </div>
        </section>
        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="fa fa-users"></i>

                            </div>
                            <h2 class="contact-info-one__title">About Us </h2>
                            <p class="contact-info-one__text">ENSI e-learning platform was founded by LASMAR RAYA and MESSOUSSI INES .<br><br></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-one__single wow fadeInUp" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="fas fa-map-marker-alt"></i>
                               
                            </div>
                            <h2 class="contact-info-one__title">Our Address</h2>
                            <p class="contact-info-one__text">Campus Universitaire de la Manouba, <br>
                                2010   Manouba <br> Tunisia</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-one__single wow fadeInDown" data-wow-duration="1500ms">
                            <div class="contact-info-one__icon"><i class="fa fa-phone"></i>

                            </div>
                            <h2 class="contact-info-one__title">Contact Info</h2>
                            <p class="contact-info-one__text">webmaster@ensi.rnu.tn<br>
                                ( +216 ) 71.600.444<br> &nbsp; </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-one">
            <div class="container">
                <h2 class="contact-one__title text-center">Post your questions  <br>here !
                    </h2>
                    
                <div class="php">
                    <h5><?php  if ( $msg != "" ) echo $msg ; ?></h5>
                </div>
                <form method="POST"   action="contact.php" >
                    <div class="row low-gutters">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Email Address" name="email" required>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea placeholder="Write Message" name="message" required></textarea>
                            <div class="text-center">
                                <button type="submit"  name="submit" class="contact-one__btn thm-btn">Submit Comment</button>
                            </div><!-- /.text-center -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form>
              
                <div class="result text-center"></div><!-- /.result -->
                <a href="questions.php">frequently asked questions</a>
            </div>
        </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51109.76872243814!2d10.042640627900166!3d36.80987936617067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd2d96ed985f79%3A0x47409dcfedbf4a61!2sCampus%20Universitaire!5e0!3m2!1sfr!2stn!4v1597138473565!5m2!1sfr!2stn" class="google-map__contact" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php include_once('footer.php')?>