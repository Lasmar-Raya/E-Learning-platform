<div id='body_right'>  
    <?php include 'inc/db.php';?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>members</title>
        </head>
        <body>
            

            <div id='add' align="center">  
            
            <h3>Teacher not subscribed</h3>
            <br><a href="add_teacher.php" style="text-decoration: none; color:white;font-size:20px; position:center; background-color:#f5d15a;border-radius:15px; width:250px; padding:10px;">ADD Teachers</a><br>
            <table cellspacing="0" style="width:80%; ">
                    <tr >
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>
            
                    <?php
                        $select_all_members = $con->query('select * from teachers');
                        if($select_all_members->rowCount() > 0){
                            while($m = $select_all_members->fetch())
                            {
                                echo"<tr>
                                <td  style= 'border-bottom: 1px solid black;'> <b>".$m['email']."</b></td>
                                <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'><a href='delete-teacherdb.php?id=".$m['id']."' style='text-decoration: none; color: #e91e63; position:absolute;'>Delete</a></td>
                            </tr> ";
                            }
                        }
                        else{echo "There is no members" ;}
                    ?>
                </table>
                <br><br>
                <h3>Teacher subscribed</h3>

                <table cellspacing="0" style="width:80%; ">
                    <tr >
                        <th>Teacher Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            
                    <?php
                        $select_all_members = $con->query('select * from users where usertype=1');
                        if($select_all_members->rowCount() > 0){
                            while($m = $select_all_members->fetch())
                            {
                                echo"<tr>
                                <td  style= 'border-bottom: 1px solid black;'><b>".$m['name']."</b></td>
                                <td  style= 'border-bottom: 1px solid black;'> <b>".$m['email']."</b></td>
                                <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'><a href='modify-teacher.php?id=".$m['id']."' style='text-decoration: none; color: #8bc34a; position:absolute;'>Edit</a></td>
                                <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'><a href='delete-teacher.php?id=".$m['id']."' style='text-decoration: none; color: #e91e63; position:absolute;'>Delete</a></td>
                            </tr> ";
                            }
                        }
                        else{echo "There is no members" ;}
                    ?>
                </table>
            </div>
        </body>
    </html>
<div>    