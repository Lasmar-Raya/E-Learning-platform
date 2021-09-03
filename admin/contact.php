
    <div id='body_right'>
        <h3>Contact Us Page</h3>
        <div id='con'>
            <?php
                        include "inc/db.php" ;

                        $get_contact=$con->prepare("select * from contact");
                        $get_contact->setFetchMode(PDO:: FETCH_ASSOC);
                        $get_contact->execute();
                        $row=$get_contact->fetch();
                        echo "
                            <center><form method='post' enctype='multipart/form-data'>
                            <table>
                                <tr>
                                    <td>Update Contact N°</td>
                                    <td><input type='text' name='phn' value='".$row['phn']."'></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><input email='text' name='email' value='".$row['email']."'></td>
                                </tr>
                                <tr>
                                    <td>Update Office Address</td>
                                    <td><input type='text' name='addr' value='".$row['addr']."'></td>
                                </tr>
                                <tr>
                                    <td>http://www.facebook.com/</td>
                                    <td><input type='text' name='fb' value='".$row['fb']."'></td>
                                </tr>
                            </table>
                            <center><button name='con'>Save</button></center>

                            </form></center>";
                            if(isset($_POST['con'])){
                                $phn = $_POST['phn'];
                                $email = $_POST['email'];
                                $addr = $_POST['addr'];
                                $fb = $_POST['fb'];

                                $up = $con->query("update contact set phn='$phn', email='$email', addr='$addr', fb='$fb'");
                                if($up){
                                    header('location:index.php?contact');
                                }
                            }
                ?>
        </div>
    </div>