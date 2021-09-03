<div id='body_right'>

<?php include 'inc/db.php';?>

<?php
    if (isset($_POST['add_module'])){

        $module_name = $_POST['module_name'];
        $num=$_POST['num'];

        $check = $con->prepare("SELECT * FROM modules WHERE module='$module_name'");
        $check->setFetchMode(PDO:: FETCH_ASSOC);
        $check->execute();
        $count = $check->rowCount();
        if ( $count==1 ){
            echo"<script>alert('Module already exists !')</script>";
            header('location:index.php?raya');
        }
        else{
            $add_cat=$con->prepare("INSERT INTO modules (module, semestre) VALUES ('$module_name', '$num') ");
            if($add_cat->execute()){
                echo"<script>alert('Module Added Successfully')</script>";
                echo"<script>window.open('index.php?raya','_self')</script>";//window.open(url:direction,used for open page in same tab)
            }
            else{
                echo"<script>alert('Module Not Added')</script>";
                echo"<script>window.open('index.php?raya','_self')</script>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
</head>
<body>
    <div class="div_semestre">
        <form action="category.php" method="POST">
            <input type="text" placeholder="Enter Module name" name="module_name">
            <select name="num">
                <option value="1"> semestre1 </option>
                <option value="2"> semestre2 </option>
                <option value="3"> semestre3 </option>
                <option value="4"> semestre4 </option>
                <option value="5"> semestre5 </option>
            </select>
            <input type="submit" name="add_module" value="ADD Module">
        </form>
    </div>
    <div id='add' align="center">
        <table cellspacing="0" style="width:80%; ">
                    <tr >
                        <th>Module</th>
                        <th>Semestre</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
            <?php
                $select_all_categories = $con->query('select * from modules order by semestre ASC');
                if($select_all_categories->rowCount() > 0){
                    while($m = $select_all_categories->fetch()){
                        echo"<tr>
                        <td style= 'border-bottom: 1px solid black;'><b><a href='category_content.php?id=".$m['id']."' style='text-decoration: none; color: purple'>".$m['module']."</a></b></td>
                        <td style= 'border-bottom: 1px solid black;'> <b><a href='category_content.php?id=".$m['id']."' style='text-decoration: none; color: purple'>".$m['semestre']."</a></b></td>
                        <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'> <a href='modify_category.php?id=".$m['id']."' style='text-decoration: none; color: #8bc34a;position:absolute;'>Edit</a></td>
                        <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'>  <a href='delete_category.php?id=".$m['id']."' style='text-decoration: none; color: #e91e63;position:absolute;'>Delete</a></td>
                        </tr>";
                    }
                }
                else{
                    echo "There is no Module" ;
                }

            ?>
        </table>
    </div>
</body>
</html>

