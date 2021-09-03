<?php
    
    include 'inc/db.php';

    
    if((isset($_GET['del_term'])) AND (!empty($_GET['del_term']))){
        
        $getid = $_GET['del_term'];
        $delete_user_info = $con->prepare("DELETE FROM messages WHERE q_id = ?"); // ? cad en fct de l id
        $delete_user_info->execute(array($getid));
        header('location: index.php?faqs');
    }

?>