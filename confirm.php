<?php
  function redirect() 
  {  header('Location:index.php');
    exit();}

    session_start();
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
     $email=$_SESSION['email'];
     $token=$_SESSION['token'];

     $sql=$con->query("select id from users where email ='$email' and token='$token' and emailconfirmed=0");
     $i=$sql->rowCount();
            if ( $i > 0 )
            {
                $sql=$con->query("update users set emailconfirmed=1 ,token='' where email='$email' ");
                header('Location:signin.php');
                exit();
                
            }
            else 
           { header('Location:signup.php');
            exit();}
        



?>