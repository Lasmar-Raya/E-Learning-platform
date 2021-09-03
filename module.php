
<?php 
    
    include 'admin/inc/db.php';

    if(  isset($_GET['module_id']))
    {  
        $id=$_GET['module_id'];
        $sql = $con->prepare("select * from files where module_id=? ");
        $sql->execute(array($id));
        $files=$sql->fetchAll();

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"> 
    <title>Online Education Learning</title>
    <link rel="icon"  href="assets/images/favicons/2.png">
</head>

<body>  

        <center>
            <div style="overflow-x:auto;  overflow-y: auto; margin-top:50px; height: 500px; width: 100%;">
                <table  style="width:100%;">
                    <thead style=" color:#b11977; text-align:center;font-size:20px; "> 
                        <th> ID</th>
                        <th> File Name</th>
                        <th> Size</th>
                        <th> Downloads</th>
                        <th> Action</th>
                    </thead>
                    <tbody style="  text-align:center;color: rgb(26 26 67 / 93%); ">
                        <?php foreach($files as $file): ?>
                        <tr>
                            <td><?php echo $file['id']; ?></td>
                            <td><?php echo $file['name']; ?></td>
                            <td><?php echo $file['size']/1000 ."KB"; ?></td>
                            <td><?php echo $file['downloads']; ?></td>
                            <td><a href="module.php?file_id=<?php echo $file['id']; ?>">DOWNLOAD</a></td>
                        </tr>
                        <?php endforeach ;?>
                    </tbody>
                </table>
            </div>
        </center>

</body>
</html>