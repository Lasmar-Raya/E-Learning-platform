<?php
  include 'inc/db.php';

    //on recupere l id de l'url
    if(isset($_GET['id']) AND !empty(($_GET['id']))){
        
        $getid = $_GET['id'];
        if(isset($_POST['ok_modifier_category'])){
            $nom_modifie = ($_POST['cat_name']);
            $num = ($_POST['num']);
            $modify_category = $con->prepare("UPDATE modules SET module =?, semestre =? WHERE id = ? ");
            $modify_category->execute(array($nom_modifie, $num, $getid));

            header ('location: index.php?raya');
        }
    }
    else{
        echo "Module NOT FOUND !" ;
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
            <input type="text" name="cat_name"><br>
            <select name="num">
                <option value="1"> semestre1 </option>
                <option value="2"> semestre2 </option>
                <option value="3"> semestre3 </option>
                <option value="4"> semestre4 </option>
                <option value="5"> semestre5 </option>
            </select>
            <button  typ="submit" name="ok_modifier_category">Edit</button>
        </form>
    </div>
</body>
</html>