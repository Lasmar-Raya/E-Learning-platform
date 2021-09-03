<div id="body-right">
<?php
    include 'inc/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>members</title>
</head>
<body>
    <div id='add' align="center">  
            <table cellspacing="0" style="width:80%; ">
                <tr >
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    $select_all_members = $con->query('select * from users');
                    if($select_all_members->rowCount() > 0){
                        while($m = $select_all_members->fetch())
                        {
                            echo"<tr>
                            <td  style= 'border-bottom: 1px solid black;'><b>".$m['name']."</b></td>
                            <td  style= 'border-bottom: 1px solid black;'> <b>".$m['email']."</b></td>
                            <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'><a href='modify.php?id=".$m['id']."' style='text-decoration: none; color: #8bc34a; position:absolute;'>Edit</a></td>
                            <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'><a href='delete.php?id=".$m['id']."' style='text-decoration: none; color: #e91e63; position:absolute;'>Delete</a></td>
                        </tr> ";
                        }
                    }
                    else{echo "There is no members" ;}
                ?>
            </table>
    </div>
</body>
</html>
</div>