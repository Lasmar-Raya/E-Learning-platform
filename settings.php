<?php
    
    $source="mysql:host=localhost;dbname=research";
    $login ="root";
    $mdp ="";

    try
    {
        $con=new PDO($source,$login,$mdp);
        
    }
    catch(PDOException $e)
    {
        $error_message= $e->getMessage();
        echo $error_message;
        exit();
    }

$email=$_SESSION['email'];
$get_contact=$con->prepare("select * from users where email='$email'");
$get_contact->setFetchMode(PDO:: FETCH_ASSOC);
$get_contact->execute();
$row=$get_contact->fetch();

    echo "
    <center><form method='POST' enctype='multipart/form-data' style='margin-top:50px; border :5px solid #2c4a7f; padding:80px; background-image:url(assets/images/back1.png); background-size:cover; background-position:center;'>
    <table>
        <tr>
            <td>Email</td>
            <td>".$email."</td>
        </tr>
        <tr>
            <td style='width:200px;'>User Name°</td>
            <td><input type='text' name='name' value='".$row['name']."'></td>
        </tr>
        <tr>
            <td>Your phone</td>
            <td><input type='text' name='phone' value='".$row['phone']."'></td>
        </tr>
        <tr>
            <td>your address</td>
            <td><input type='text' name='address' value='".$row['adr']."'></td>
        </tr>
        </table>
        <br><br>
        <table>
        <tr>
        <label for='file' style=' background-color:#8BC34A; color:white;cursor:pointer;  border-radius:5px; width:200px;height:30px;text-align:center;padding:3px;margin-top:3px; '><i class='fa fa-image' style='margin-right:5px;'></i> change your avatar</label>
        <input type='file' name='file' id='file' style='display:none;'  >
        <input type ='submit' name='delete' value=' Delete your avatar' style='margin:5px; border-radius:5px; width:200px;height:30px;text-align:center;border:none; background-color:#e91e63; color:white;cursor:pointer;' >
        </tr>
        </table>
        
    </table><br><br>
    <center><input type ='submit' name='setting' value='save' style='margin:5px; border-radius:5px; width:200px;height:30px;text-align:center;border:none; background-color:#2f89fc; color:white;cursor:pointer;'></center>

    </form></center>";

    
    if(isset($_POST['delete']))
    {
        $sup = $con->query("update users set avatar='rien' where email='$email' ");
        if($sup){ header('location:profile.php?settings');}
    }

    if(isset($_POST['setting']))
    {   
        if(file_exists($_FILES['file']['tmp_name']))
        {
        $filename= $_FILES["file"]["name"];
        $file=$_FILES["file"]["tmp_name"];
        $destination='assets/avatar/'.$row['id'].'/'.$filename;
        $dossier = 'assets/avatar/' . $row['id']. '/'; 
        if (is_dir($dossier)){ move_uploaded_file($file,$destination); }
        else{mkdir($dossier); move_uploaded_file($file,$destination);}
        $av = $con->query("update users set avatar='$filename' where email='$email' ");
        }

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $addr = $_POST['address'];
        
        $up = $con->query("update users set phone='$phone', adr='$addr', name='$name' where email='$email' ");
        if($up){  header('location:profile.php?settings');  }
    }


?>