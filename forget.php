
<?php

require "PHPMailer/PHPMailerAutoload.php";
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

    if(isset($_POST['valider_email'])){
        $email = $_POST['email'];
        $requete_sur_email = $con->prepare('SELECT * FROM users WHERE email= ? ');
        $requete_sur_email->execute(array($email));
        if($requete_sur_email->rowCount()>0){
            $info_user = $requete_sur_email->fetch();
            $mdp_user = $info_user['password'];
            //echo $mdp_user;


            
            function smtpmailer($to, $from, $from_name, $subject, $body){

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;
                $mail->Username = 'ensiplatform@gmail.com';
                $mail->Password = 'ensi2020';
                $mail->IsHTML(true);
                $mail->From="ensiplatform@gmail.com";
                $mail->FromName=$from_name;
                $mail->Sender=$from;
                $mail->AddReplyTo($from, $from_name);
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);

                if(!$mail->Send()){

                    $error ="Une erreur s'est produite lors de l'envoie du mail !";
                    return $error;
                }
                else{

                    $error = "Email envoyé avec succès !";
                    return $error;
                }
            }

            $to   = $info_user['email'];
            $from = 'ensiplatform@gmail.com';
            $name = 'Admin of ENSI platform';
            $subj = 'Recovery of your account on our site';
            $msg = 'Good morning, here is your password on the site : '.$mdp_user;
            $error=smtpmailer($to, $from, $name ,$subj, $msg);
        }
        else{
            echo "email NOT FOUND";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
</head>
<body>
    <div align="center">
        <form method="post" action="">
            <input type="email" name="email">
            <button type="submit" name="valider_email">Send</button>
        </form>
        <?php
            if(isset($error)){
                echo $error ;
            }
        ?>
    </div>
</body>
</html>