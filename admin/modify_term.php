<?php
    include 'inc/db.php';
    if(isset($_GET['edit_term'])  AND !empty($_GET['edit_term'])){
        $id = $_GET['edit_term'];
        if(isset($_POST['ok_modifier_term'])){
            $nom_modifie = $_POST['name'];
            $modify_info_member = $con->prepare("UPDATE term SET term =?  WHERE t_id = ? ");
            $modify_info_member->execute(array($nom_modifie, $id));

            header ('location: index.php?terms');
        }
    }
    else{
        echo "Term NOT FOUND !" ;
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
            <input type="text" name="name" placeholder="Enter new term"><br>
            <button  typ="submit" name="ok_modifier_term">Edit</button>
        </form>
    </div>
</body>
</html>