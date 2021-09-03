<?php
    session_start();
    include 'admin/inc/db.php';
    echo "Hello Teacher , ".$_SESSION['username'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="add_student.php" class="btn btn-success " style="margin:10px;">Add Student</a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                <table class=" table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $select_all_students = $con->query("select * from users where usertype='2'");
                        if($select_all_students->rowCount() > 0){
                            while($m = $select_all_students->fetch())
                            {
                                echo"
                                    <tr>
                                        <td  style= 'border-bottom: 1px solid black;'><b>".$m['id']."</b></td>
                                        <td  style= 'border-bottom: 1px solid black;'><b>".$m['name']."</b></td>
                                        <td  style= 'border-bottom: 1px solid black;'> <b>".$m['email']."</b></td>
                                        <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'><a class='btn btn-primary' href='edit_result.php?id=".$m['id']."' style='text-decoration: none; color: #8bc34a; position:absolute;'>Edit Result</a></td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>