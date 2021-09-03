<?php
    include 'inc/db.php';
    if(isset($_GET['id']) AND !empty(($_GET['id']))){
        
        $getid = $_GET['id'];
        if(isset($_POST['ok_modifier_membre'])){
            $nom_modifie = $_POST['name'];
            $modify_info_member = $con->prepare("UPDATE users SET name =?  WHERE id = ? ");
            $modify_info_member->execute(array($nom_modifie, $getid));
            header ('location: index.php?member');
        }
    }
    else{
        echo "User NOT FOUND !" ;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify members - Administration</title>
</head>
<body>
<div align="center">
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Enter new name"><br>
            <button  typ="submit" name="ok_modifier_membre">Edit</button>
        </form>
    </div>
</body>
</html>