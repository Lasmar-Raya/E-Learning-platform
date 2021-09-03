
<?php 
    $msg=".......";
    
    include 'inc/db.php';

    if(isset($_GET['semestre1']))
    {$get_cat = $con->prepare("select * from modules where semestre=1 ");}
   
    if(isset($_GET['semestre2']))
    {$get_cat = $con->prepare("select * from modules where semestre='2'");}
    
    if(isset($_GET['semestre3']))
    {$get_cat = $con->prepare("select * from modules where semestre='3'");}
    
    if(isset($_GET['semestre4']))
    {$get_cat = $con->prepare("select * from modules where semestre='4'");}
    
    if(isset($_GET['semestre5']))
    {$get_cat = $con->prepare("select * from modules where semestre='5'");}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
</head>

<body>  
       
        <?php

            if (isset($_POST['add_file']))
            {  
                if($_POST['mod']==NULL){$msg="You have to select a module first";}
                else
                {
                    $module=$_POST['mod'];
                    $rep = $con->query("select * from modules where module='$module' ");
                    $etrr=$rep->fetch();
                    $idmod=$etrr['id'];
                    $filename= $_FILES['myfile']['name'];
                    $destination='D:/xampp/htdocs/ensiplatform/assets/uploads/'.$filename;
                    $extension=pathinfo($filename,PATHINFO_EXTENSION);
                    $file=$_FILES['myfile']['tmp_name'];
                    $size=$_FILES['myfile']['size'];
                    
                        if(move_uploaded_file($file,$destination))
                        {  
                            if($con->query("INSERT INTO files (module_id, name, module, size, downloads)
                            VALUES ('$idmod', '$filename', '$module', '$size', 0) "))
                            $msg=" UPLOADED !";
                            else { $msg=" failed" ;}
                                
                        }
                }
            }
        ?>
     <center>  
        <a href="index.php?ines"> <i class="fa fa-chevron-left"></i></a> <br><br>
        <div class="form-module">
        
            <center> <div class="php"><h5><?php  if ( $msg != "" ) echo $msg ; ?></h5></div></center> 
            <form method="POST" enctype="multipart/form-data">

                <select name="mod">
                    <option value="">Select Module  </option>
                    <?php
                    $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
                    $get_cat->execute();
                    while($row = $get_cat->fetch(PDO:: FETCH_ASSOC))
                    {echo "<option value='".$row['module']."'>".$row['module']."</option> ";}
                    ?>
                </select>
                <input type="file" name="myfile" id="file"> 
                <input type="submit" name="add_file" value="ADD file">
                
            </form> 
        </div>
    </center>
</body>


</html>