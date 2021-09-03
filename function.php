<?php
    function head_link(){
        include 'admin/inc/db.php';
        $get_link = $con->prepare('select * from contact');
        $get_link->setFetchMode(PDO:: FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"
        <a href='https://www.email.com/".$row['email']."' target='_blank'><i class='fa fa-envelope'></i></a>
        <a href='#'><i class='fab fa-youtube></i></a>
        <a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-square'></i></a>
        <a href='#'><i class='fab fa-instagram'></i></a>
        ";
    }
    
?>