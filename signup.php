
<?php

$msg="";

    session_start();
    include 'admin/inc/db.php';

    if (isset($_POST['signup']))
    {
      $name =$_POST['name'] ;
      $email = $_POST['email'] ;
      $password = $_POST['password'] ;
      $cPassword = $_POST['cPassword'] ;
      $filename= $_FILES["myfile"]["name"];
      $file=$_FILES["myfile"]["tmp_name"];
     
     
      if( $name == "" || $email == "" || $password != $cPassword)
      {
          $msg = "Please check your INPUTS !" ;
      }
      else
      {
          $sql=$con->query("select id from users where email ='$email' ");
          $i=$sql->rowCount();
          if ( $i > 0 )
          {
              $msg= "Email exists in the database !";
          }
          else
          {   
              $token = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN123456789!$/()*';
              $token =str_shuffle($token);
              $token = substr($token, 0, 10 );
     
              $hashedPassword =password_hash($password, PASSWORD_BCRYPT);
              $con->query("INSERT INTO users (name, email, avatar, password, emailConfirmed, token)
                          VALUES ('$name', '$email', '$filename', '$hashedPassword', '0', '$token') ");
           
              ini_set( 'display_errors', 1 );
              error_reporting( E_ALL );
     
              $from = "ensiplatform@gmail.com";
              $subject = "Checking PHP mail";
              $message = "PHP mail works just fine \n please click on the link bellow \n http://localhost/ensiplatform/confirm.php";
              $headers = "From:" . $from;
              
                  if(mail($email,$subject,$message, $headers))
                      {$msg= "You have been registered ! Please verify your email !";
                         $_SESSION['email']=$email;
                         $_SESSION['token']=$token;}
                  else
                      $msg="something wrong happened! please try again !";      
               
          }        
      }
    }    

?>
  
   
   
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/2.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/2.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <style>
        .signup-content 
        {
        display: flex; 
        }
        a:focus, a:active 
        {
        text-decoration: none;
        outline: none;
        transition: all 300ms ease 0s;
        }
        p 
        {
        margin-bottom: 0px;
        font-size: 15px;
        color: #777; 
        }
        body 
        {
        font-size: 13px;
        line-height: 1.8;
        color: #222;
        background: #f8f8f8;
        font-weight: 400;
        font-family: serif; 
        }
        .container1 
        {
        width: 900px;
        background: #fff;
        margin: 0 auto;
        margin-top:30px;
        margin-bottom:30px;
        border-radius: 20px;
        padding: 75px 0; 
        box-shadow:  0 0 2em rgb(11, 0, 77);
        }
        .container
        {
            background-color:#012154; 
            padding-top:20px;
            display:block;
            margin-right:0;
        }
        .signup-form, .signup-image 
        {
        width: 50%;
        overflow: hidden; 
        }
        .signup-image 
        { 
        height: 450px;
        background-image:url(assets/images/background.jpg);
        background-size: cover;
        margin: 0 55px;
        margin-top: 10px; 
        border-radius: 8px;
        box-shadow:  0 0 2em rgb(11, 0, 77);
        }
        .php 
        {
            margin-top:15px;
            text-align: center;
            color:#e82869;
            box-shadow:  0 0 1em #d099b6;
        }
        .text  
        {
        margin-top: 120px;
        text-align: center;
        color: #f8f8f8;
        }
        .text a 
        {
        text-decoration: none;
        background-color: rgb(3, 4, 68); 
        border-radius: 8px;
        color: cornsilk;
        padding: 5px;   
        width: 40px; 
        height: 10px;
        margin-top: 15px;
        }
        .text a:hover
        { 
            background-image: linear-gradient(rgb(168, 21, 132), rgb(89, 19, 99));
        }
        .form-title 
        {
            margin-bottom: 50px; 
            margin: 0;
            color: rgb(6, 6, 56);
            font-family: serif;
            font-size: 45px;
        }
        .form-submit
        {
        display: inline-block;
        background: #012154;
        color: #fff;
        border-bottom: none;
        width: auto;
        padding: 15px 39px;
        border-radius: 5px;
        margin-top: 25px;
        cursor: pointer; 
        }
        .form-submit:hover { background: #4292dc; }
        .signup-form 
        {
        margin-left: 75px;
        margin-right: 75px;
        padding-left: 34px; 
        }
        .form-group 
        {
        position: relative;
        margin-bottom: 25px;
        overflow: hidden; 
        }
        input 
        {
        width: 100%;
        display: block;
        border: none;
        border-bottom: 1px solid #999;
        padding: 6px 30px;
        font-family: Poppins;
        box-sizing: border-box; 
        }
        label 
        {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: #222;
        }
        @media screen and (max-width: 1200px) 
        {
        .container 
        {
            width: calc( 100% - 30px);
            max-width: 100%; 
        } 
        }
        @media screen and (min-width: 1024px) 
        {
        .container {max-width: 1200px; } 
        }
        @media screen and (max-width: 768px) 
        {
        .signup-content, .signin-content 
        {
            flex-direction: column;
            justify-content: center;
        }
        .signup-form 
        {
            margin-left: 0px;
            margin-right: 0px;
            padding-left: 0px;
            padding: 0 30px; 
        }
        .signup-form, .signup-image {width: auto; }
        .form-button {text-align: center; }
        .form-title {text-align: center; } 
        }
        .topbar-one {background-color: rgb(26 26 67 / 93%);}
        .topbar-one__left 
        {
        padding-top: 6.5px;
        padding-bottom: 6.5px;
        height:40px;
        }
        .topbar-one__left a 
        {
        color: #ffffff;
        font-size: 16px;
        text-decoration:none;
        transition: color .4s ease;
        }
        .topbar-one__left a:hover {color: #b11977;}
        .topbar-one__left a + a {margin-left: 900px;}
        .copy{ background-color:#0e1029;}
        .footer{ background-color: rgb(26 26 67 / 93%); padding-top:20px;}
        .avatar{ position: relative;
        margin-bottom: 50px;margin-top: 40px; margin-left:50px;
         }
        .avatar #file {display:none;}
        .avatar label{ border :3px solid rgb(26 26 67 / 93%); color:rgb(26 26 67 / 93%); width:200px;font-weight:bold; cursor:pointer; height:30px; text-align:center;}
        .avatar label:hover{background-color:rgb(26 26 67 / 93%); color:white;}
    </style>
</head>
<body>
    <div class="topbar-one ">
                <center>
                    <div class="topbar-one__left">
                        <a href="#">webmaster@ensi.rnu.tn</a>
                        <a href="#">( +216 ) 71.600.444</a>
                    </div><!-- /.topbar-one__left -->
               </center>
    </div><!-- /.topbar-one -->

    <!-- Sign up form -->
    <section class="signup">
        <div class="container1">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2> <br><br>
                    <form method="POST" action="signup.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name"><i class="fa fa-user"></i></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fa fa-envelope"></i> </label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="fa fa-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="fa fa-lock"></i></label>
                            <input type="password" name="cPassword" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <!-- avatar -->
                        <div class="  avatar">
                            <label for="file"><i class="fa fa-image"></i> Add your avatar</label>
                            <input type="file" name="myfile" id="file"  >
                        </div>
                        <!-- avatar -->
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                    <?php 
                     // avatar
                     if(isset($_POST['signup'])&&file_exists($_FILES['myfile']['tmp_name']))
                       {$sql=$con->query("select * from users where email ='$email' ");
                        $rep=$sql->fetch();
                        $id=$rep['id'];
                        $destination='assets/avatar/'.$id.'/'.$filename;
                        $extension=pathinfo($filename,PATHINFO_EXTENSION);
                        $dossier = 'assets/avatar/' . $id. '/'; 
                        if (!is_dir($dossier)){mkdir($dossier); move_uploaded_file($file,$destination);}}
                    // avatar
                    ?>
                </div>
        
                <div class="signup-image">
                    <div class="php">
                        <h5><?php  if ( $msg != "" ) echo $msg ; ?></h5>
                    </div>
                    <div class="text">
                        <h3>One Of Us ?</h3>
                        <p ><h4>If you already had an account just <br><br><a href="signin.php"><em>Sign In!</em></a></h4> </p> 
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer >
        <div class="footer">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/tQFDK5GOWEQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> ENSI 2020</a>
            </div>
        </div>
    </footer>

</body>
</html>
