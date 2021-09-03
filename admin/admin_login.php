<?php
    session_start();
    include 'inc/db.php';

    if(isset($_POST['ok_connexion'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $pseudo = 'ensiplatform@gmail.com';
            $mdp = 'ensi2020'; //default

            if($_POST['pseudo'] == $pseudo){
                if($_POST['mdp'] == $mdp){
                    $_SESSION['mdp'] = $mdp; //on a fait le control dans index.php sinon elle va rester dans login
                    header('location: index.php');
                }
                else{
                    echo "INCORRECT Password!";
                }
            }
            else{
                echo "INCORRECT Username Admin!";
            }
        }
        else{
            echo "complete all fields !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Login - Administration</title>
    <link rel="icon"  href="../assets/images/favicons/2.png">

</head>
<body style=" background-image:url(../assets/images/back1.png); background-size:cover;background-position:center;">


    <div align="center" style="margin">
        <div id="login" style="box-shadow: 8px 8px 50px #000; margin-top:100px;width:60%; padding-top:40px;padding-bottom:40px;">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form method="POST" action="">
                                <h3 class="text-center text-info">Admin Login form</h3>
                                <div class="form-group">
                                    <label for="email" class="text-info">Email:</label><br>
                                    <input  class="form-control"  type="email" id="email" name="pseudo" ><br>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input class="form-control" type="password" id="password"name="mdp" ><br><br>
                                </div>
                                <button style="width:200px;" class="btn btn-info btn-md" type="submit" name="ok_connexion">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>