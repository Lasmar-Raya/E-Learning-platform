<?php
    session_start();
    $source="mysql:host=localhost;dbname=ensiplatform";
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
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</head>
<body>
<form method="POST" class="register-form" action="add_student_post.php">
    <div class="container">
        <div class="row">
            <h2 style="margin:15px" class="text-center">Add Student</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <input type="text" name="name" placeholder="Name" required class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <input type="email" name="email" placeholder="Email" required class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <input type="password" name="password" placeholder="Password" required class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 form-group">
                <button type="submit"  class="btn btn-success" name="add">Add student</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>