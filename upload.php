<?php include 'fileslogic.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <title> upload</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <h3>Upload files</h3>
                <input type="file" name="myfile"><br><br>
                <input type="text" name="module">
                <button type="submit" name="save">upload</button>
            </form>
            </div>

<br><br><br><br><br>
            
                        <?php foreach($files as $file): ?> 
                        
                            <td><?php echo $file['id']; ?></td>
                            <td><?php echo $file['name']; ?></td>
                            <td><?php echo $file['size']/1000 ."KB"; ?></td>
                            <td><?php echo $file['downloads']; ?></td>
                            
                        <?php endforeach ;?>
                    </tbody>
                </table>

            </div> 
        </div>
    </body>
</html>