<?php
    include 'inc/db.php';

    if((isset($_GET['confirm_term'])) AND (!empty($_GET['confirm_term']))){
        
        $getid = $_GET['confirm_term'];
        $delete_user_info = $con->prepare("update messages set confirm='1' where q_id=?"); // ? cad en fct de l id
        $delete_user_info->execute(array($getid));
        header('location: index.php?faqs');
    }

?>

