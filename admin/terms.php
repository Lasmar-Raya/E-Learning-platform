<div id='body_right'>
        <h3>View All T&C</h3>
        <div id='add'>
            <details>
                <summary>Add New T&C</summary>
                <form method="post" enctype="multipart/form-data">
                    <select name="for_whom" required>
                        <option value="">Select Term For</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                    <input type="text" name="term" placeholder="Enter Term Here">
                    <center><button name="add_term">Add T&C</button></center>
                </form>

            </details>
            <table style="width:98% ;" cellspacing="0">
                <tr>
                    <th>N°</th>
                    <th>Terms</th>
                    <th>For Whom</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                        include "inc/db.php" ;
                        $get_c = $con->prepare("select * from term");
                        $get_c->setFetchMode(PDO:: FETCH_ASSOC);
                        $get_c->execute();
                        $i=1;
                        while($row= $get_c->fetch()){
                        echo    "<tr>
                                    <td style= 'border-bottom: 1px solid black;'>".$i++."</td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['term']."</td>
                                    <td style= 'border-bottom: 1px solid black;'>".$row['for_whom']."</td>
                                    <td style= 'border-bottom: 1px solid black; padding-bottom:17px'><a style='text-decoration: none; color: #8bc34a;position:absolute;' href='modify_term.php?terms&edit_term=".$row['t_id']."'>Edit</a></td>
                                    <td style= 'border-bottom: 1px solid black; padding-bottom:17px'><a style='text-decoration: none; color: #e91e63;position:absolute;' href='index.php?terms&del_term=".$row['t_id']."'>Delete</a></td>
                                </tr>";
                        }


                        if((isset($_GET['del_term'])) AND (!empty($_GET['del_term']))){

                                $getid = $_GET['del_term'];
                                $delete_user_info = $con->prepare('DELETE FROM term WHERE t_id = ?');
                                $delete_user_info->execute(array($getid));
                                header('location: index.php?terms');
                        }

                ?>
            </table>
        </div>
    </div>

    <?php

        if (isset($_POST['add_term'])){

            $term = $_POST['term'];
            $for_whom = $_POST['for_whom'];

            $check = $con->prepare("SELECT * FROM term WHERE term='$term'");
            $check->setFetchMode(PDO:: FETCH_ASSOC);
            $check->execute();
            $count = $check->rowCount();
            if ( $count==1 ){
                echo"<script>alert('Term is already Added !')</script>";
                echo"<script>window.open('index.php?terms','_self')</script>";
            }
            else{
                $add_term=$con->prepare("INSERT INTO term (term,for_whom) VALUES ('$term', '$for_whom') ");
                if($add_term->execute()){
                    echo"<script>alert('Term Added Successfully')</script>";
                    echo"<script>window.open('index.php?terms','_self')</script>";
                }
                else{
                    echo"<script>alert('Term Not Added')</script>";
                    echo"<script>window.open('index.php?terms','_self')</script>";
                }
            }

        }


?>