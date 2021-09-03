<?php
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
    $name =$_POST['name'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;

    if(isset($_POST['add'])){
    $sql=$con->query("select id from users where email ='$email' ");
        $i=$sql->rowCount();
        if ( $i > 0 )
        {
            $msg= "Email exists in the database !";
        }
        else
        {

            $hashedPassword =password_hash($password, PASSWORD_BCRYPT);
            
            $con->query("INSERT INTO users (name, email, password, usertype)
                    VALUES ('$name', '$email', '$hashedPassword', '2')");
             if($con){
                 header("location:add_student.php?success=Added Successfully");
             } 
             else{
                header("location:add_student.php?error=Failed");
             }      
                
        }
        
    }
?>