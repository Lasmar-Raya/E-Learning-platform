<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
        </head>
        <body>
                <div id='body_right'>
                        <h3>Contact Us Page</h3>
                        <div id="about">

                                <?php
                                        //affichage du paragraphe déja insérée dans la base
                                        include "inc/db.php" ;
                                        $get_contact=$con->prepare("select * from about");
                                        $get_contact->execute();
                                        $row=$get_contact->fetch();
                                ?>

                                <form action="about.php" method="POST">
                                        <textarea name="paragraph"><?php echo $row['paragraph']; ?></textarea>
                                        <center><input type='submit' name='edit' value='Save'></center>
                                </form>
                                <?php
                                        if(isset($_POST['edit'])){

                                                $paragraph = $_POST['paragraph'];
                                                $up = $con->prepare("     UPDATE about
                                                                        SET paragraph = '$paragraph' ");
                                                if($up->execute()){
                                                header('location:index.php?about');
                                                }
                                                else{echo "<script>alert('error !')</script> ";}
                                        }
                                ?>
                                        
                                        

                        
                        
                        </div>
                </div>
        </body>
 </html>