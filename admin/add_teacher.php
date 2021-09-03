<?php
$msg="";
session_start();
include 'inc/db.php';

if(isset($_POST['add']))
{
    $email=$_POST['email'];
    $sql=$con->query("select id from teachers where email='$email'" );
    $i=$sql->rowCount();
    if ( $i > 0 )
    {
        $msg="teacher exists in the db";
    }
    else
    {
        $con->query("INSERT INTO teachers (email) VALUES ('$email') ");
        header('location:index.php?teacher');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD teachers</title>
</head>
<body>
<div align="center">
    <?php if($msg !=""){echo $msg;} ?>
    <br>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Enter new teacher"><br>
            <button  typ="submit" name="add">Edit</button>
        </form>
    </div>
</body>
</html>