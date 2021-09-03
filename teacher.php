<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'header.php';
        include 'admin/inc/db.php';
    ?>
    
        <h1>Instructor Dashboard</h1>

        <div id='add'>
                <details>
                    <summary>Add module </summary>
                    <div class="ss">
                    <a href="teacher.php?semestre1"> semester1</a>
                    <a href="teacher.php?semestre2"> semester2</a>
                    <a href="teacher.php?semestre3"> semester3</a>
                    <a href="teacher.php?semestre4"> semester4</a>
                    <a href="teacher.php?semestre5"> semester5</a>
                    </div>
                </details>
        </div>    
    
    
    <?php  
        if(isset($_GET['semestre1']) || isset($_GET['semestre2']) || isset($_GET['semestre3']) ||isset($_GET['semestre4']) ||isset($_GET['semestre5']))
        { include 'admin/semestre.php';}
        include 'footer.php';
    ?>
</body>
</html>