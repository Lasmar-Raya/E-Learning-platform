<?php 

$msg="";
if (isset($_POST['signin']))
{
    session_start();
    include 'admin/inc/db.php';

    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    if( $password == "" || $email == "" )
        {
            $msg = "Please check your INPUTS !" ;
        }
    else
    {
        $sql=$con->query("select id , name,phone,adr,avatar,password,emailconfirmed,usertype from users where email='$email'" );
        $i=$sql->rowCount();
            if ( $i > 0 )
            {
                $data=$sql->fetch();
                if(password_verify($password,$data['password']))
                {
                    if($data['emailconfirmed']==0)
                    $msg="please verify your email";
                    else  
                    {   
                        $_SESSION['id']=$data['id'];
                        $_SESSION['username']=$data['name'];
                        $_SESSION['avatar']=$data['avatar'];
                        $_SESSION['phone']=$data['phone'];
                        $_SESSION['address']=$data['adr'];
                        $_SESSION['email']=$email;
                        header("location:index.php");
                        exit();
                    }
                }
                else {
                    $msg= "email/password combination incorrect";
                }
                
            }
            else 
            {$msg="You have to register firt";}
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/2.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/2.png">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <style>
        .signin-content {display: flex;}
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
        color: #777; }
        




        body 
        {
        font-size: 13px;
        line-height: 1.8;
        color: #222;
        /*background: #f8f8f8;*/
        font-weight: 400;
        font-family: serif; 
        background-color: rgb(26 26 67 / 93%);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        body:before {content: ''; background-image: url(assets/images/2.jpg);opacity: 0.08;}
        .container1 
        {
        width: 900px;
        background: #fff;
        margin: 0 auto;
        margin-top:30px;
        margin-bottom:30px;
        border-radius: 20px;
        padding-top:20px;
        box-shadow:  0 0 2em rgb(11, 0, 77);
        height:600px;
        }
        .container
        {
            background-color:#012154; 
            padding-top:20px;
            display:block;
            margin-right:0;
        }
        .signin-form, .signin-image 
        {
        width: 50%;
        overflow: hidden; 
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
        margin-top: 100px;
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
        .text a:hover{ background-image: linear-gradient(rgb(168, 21, 132), rgb(89, 19, 99));}
        .form-title 
        {
        margin-bottom: 50px;
        color: rgb(3, 4, 68); 
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
        .form-submit:hover {background: #4292dc; }
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
        .signin-content 
        {
        padding-top: 67px;
        padding-bottom: 87px; 
        }
        .signin-form 
        {
        margin-right: 90px;
        margin-left: 80px; 
        }
        .signin-image 
        {
        width:550px;
        height:450px;
        background-image:url(assets/images/background.jpg);
        background-size: cover;
        margin: 0 55px;
        border-radius: 8px;
        box-shadow:  0 0 2em rgb(11, 0, 77);
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
    <div class="">
      <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container1">
                <div class="signin-content">
                    <div class="signin-image">
                    <div class="php"><h5><?php  if ( $msg != "" ) echo $msg ; ?></h5></div>
                        <div class="text">
                             <h3>New Here ?</h3>
                            <p ><h5>Sign up and take the time right now to acknowledge and appreciate yourself for everything that you  will accomplish here<br><br><a href="signup.php"><em>Sign Up!</em></a></h5> </p> 
                        </div>
                    </div>
                  

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2> <br><br><br><br>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa fa-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" required/>
                            </div>
                            
                         
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <br>
                        <center>
                            Not yet a member?<a href="signup.php" style="color: #ce46a0;  ">Sign Up ?</a><br>
                            <a href="#"  style="color: #ce46a0; ">Forgot Password ?</a>
                        </center>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
    <footer class="f">

<!-- Footer Elements -->
<div class="footer">

  <!--Grid row-->
  <div class="row d-flex justify-content-center">

    <!--Grid column-->
    <div class="col-md-6">

      <!-- Video -->
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
<!-- Copyright -->

</footer>
<!-- Footer -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>