<?php
   include 'inc/db.php';
    if(isset($_GET['id']) AND !empty(($_GET['id']))){
        
        $getid = $_GET['id'];
        $delete_user_info = $con->prepare('DELETE FROM teachers WHERE id = ?'); // ? cad en fct de l id
        $delete_user_info->execute(array($getid));
        header('location: index.php?teacher');
    }
    else{
        echo "User NOT FOUND !" ;
    }

?>