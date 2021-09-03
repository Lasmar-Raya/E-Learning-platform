<div id='body_right'>
    <?php
        include 'inc/db.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
            <title>Subcategory</title>
        </head>
        <body>
            <h3>View All Modules</h3>
            <div id='add'>
                <details>
                    <summary>Add module </summary>
                    <div class="ss">
                    <a href="index.php?semestre1"> semester1</a>
                    <a href="index.php?semestre2"> semester2</a>
                    <a href="index.php?semestre3"> semester3</a>
                    <a href="index.php?semestre4"> semester4</a>
                    <a href="index.php?semestre5"> semester5</a>
                    </div>
                </details>
                
                <table cellspacing="0">
                    <tr>
                        <th>N°</th>
                        <th>file</th>
                        <th>Size</th>
                        <th>Dowloads</th>
                        <th>module</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        $get_cat = $con->prepare("SELECT * From files order by module ASC");
                        $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
                        $get_cat->execute();

                        $i = 1;
                        while($row = $get_cat->fetch(PDO:: FETCH_ASSOC))
                        {
                            echo    "<tr  >
                                        <td style= 'border-bottom: 1px solid black;'>".$i."</td>
                                        <td style= 'border-bottom: 1px solid black;'>".$row['name']."</td>
                                        <td style= 'border-bottom: 1px solid black;'>".$row['size']."</td>
                                        <td style= 'border-bottom: 1px solid black;'>".$row['downloads']."</td>
                                        <td style= 'border-bottom: 1px solid black;'>".$row['module']."</td>
                                        <td style= 'border-bottom: 1px solid black;padding-bottom:16px;'> <a href='delete_subcategory.php?id=".$row['id']."' style='text-decoration: none; color:#e91e63; position:absolute;'>Delete</a></td>
                                    </tr>";
                            $i++;
                        }
                    ?>
                </table>
            </div>    
        </body>
    </html>
</div>

