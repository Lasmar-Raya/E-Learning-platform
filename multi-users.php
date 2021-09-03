<?php
    session_start();
    $mysqli-> new mysqli('localhost','root','','accounts');
    $msg="";

    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password = sha1($password);
        $userType= $_POST['userType'];

        $sql = "SELECT * FROM users WHERE username=? AND user_type=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss",$name,$password,$userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        session_regenerate_id();
        $_SESSION['name'] = $row['name'];
        $_SESSION['user_type'] = $row['user_type'];

        session_write_close();

        if($result->num_rows==1 && $_SESSION['role']=="Student"){
            header("location:index.php");
        }
        else if($result->num_rows==1 && $_SESSION['role']=="Teacher"){
            header("location:teacher.php");
        }
        else if($result->num_rows==1 && $_SESSION['role']=="Admin"){
            header("location:admin/index.php");
        }
        else{
            $msg = "Username or Password is Incorrect";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Multi-users</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-light bg-danger p-3">Multi User Role Login System</h3>
                <form action="<?= $_SERVER['PHP_SELF']?>" method="post" class="p-4">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="name" class="form-control form-control-lg" placeholder="Password" required>
                    </div>
                    <div class="form-group lead">
                        <label for="userType">I am a :</label>
                        <input type="radio" name="userType" class="custom-radio" value="Student" required>&nbsp;Student |
                        <input type="radio" name="userType" class="custom-radio" value="Teacher" required>&nbsp;Teacher |
                        <input type="radio" name="userType" class="custom-radio" value="Admin" required>&nbsp;Admin
                    </div>
                    <div class="form">
                        <input type="submit" name="login" class="btn btn-danger btn-block">
                    </div>
                    <h5 class="text-danger text-center"><?= $msg; ?></h5>
                </form>
            </div>
        </div>
    </div>
</body>
</html>