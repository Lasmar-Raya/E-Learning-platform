<?php

include 'inc/db.php';


$sql=$con->query("select * from files ");
$files=$sql->fetchAll();




if (isset($_POST['save']))
{    
  




    $module = $_POST['module'];
    $filename= $_FILES['myfile']['name'];
    $destination='D:/xampp/htdocs/ensiplatform/assets/uploads/'.$filename;
    $extension=pathinfo($filename,PATHINFO_EXTENSION);
    $file=$_FILES['myfile']['tmp_name'];
    $size=$_FILES['myfile']['size'];
    if(!in_array($extension,['zip' ,'pdf','png','pdf','jpg' ,'MP4']) )
    {
        echo" your file extension must be .zip, pdf or .png";
    }
    elseif ($_FILES['myfile']['size']>10000000)
    {
        echo"file is too large";
    }
    else{
        if(move_uploaded_file($file,$destination))
        {

            if($con->query("INSERT INTO files (name,  size, module, downloads)
            VALUES ('$filename', '$size','$module', 0) "))
            echo " uploaded";
            else { echo " failed" ;}
            
        }
    }

}
if(isset($_GET['file_id']))
{
    $id=$_GET['file_id'];
    $sql=$con->query("select * from files where id ='$id' ");
    $file=$sql->fetch(PDO::FETCH_ASSOC);
    $filepath='D:/xampp/htdocs/ensiplatform/assets/uploads/'.$file['name'];


    if(file_exists($filepath))
    {
        header('Content-Type:application/octet-stream');
        header('Content-Description: File Transfer');
        header('Content-Disposition:attachment; filename=' .basename($filepath));
        header('Expires:0');
        header('Cache-Control:must-revalidate');
        header('Pragma:Public');
        header('Content-Lenght:'.filesize('D:/xampp/htdocs/ensiplatform/assets/uploads/'.$file['name']));
        readfile('D:/xampp/htdocs/ensiplatform/assets/uploads/'.$file['name']);
        $newCount =$file['downloads']+1;
        $updatequer =$con->query("update files set downloads=$newCount where id='$id' ");
        exit;
    }
}



?>