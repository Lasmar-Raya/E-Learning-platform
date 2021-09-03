<?php
   include 'inc/db.php';

    
    //on recupere l id de l'url
    if(isset($_GET['id']) AND !empty(($_GET['id']))){
        
        $getid = $_GET['id'];
        $delete_user_info = $con->prepare('DELETE FROM users WHERE id = ?'); // ? cad en fct de l id
        $delete_user_info->execute(array($getid));
        header('location: index.php?member');
    }
    else{
        echo "User NOT FOUND !" ;
    }

?>