<div id="body_left">

    <h3>ADMIN</h3>
    <div style="height:250px; background-image:url(../assets/images/admin.png);background-size:cover; background-position:center" ></div>
    
    <h3>Content Management</h3>
    <ul>
        <li><a href="index.php?raya">View Modules</a></li> 
        <li><a href="index.php?ines">View courses</a></li>
    </ul>
    
    <h3>User Management</h3>
    <ul>
        <li><a href="index.php?member">View All Students</a></li>
        <li><a href="index.php?teacher">View All Teachers</a></li>
    </ul>
    
    <h3>Pages Management</h3>
    <ul>
        <li><a href="index.php?terms">Terms & conditions Page</a></li>
        <li><a href="index.php?contact">Contact our Page</a></li>
        <li><a href="index.php?about">About our page</a></li>
        <li><a href="index.php?faqs">FAQs Page</a></li>
    </ul>

</div>

<?php
    if(isset($_GET['raya'])){
        include './category.php';
    }

    if(isset($_GET['ines'])){
        include './sub_category.php';
    }

    if(isset($_GET['semestre1']) || isset($_GET['semestre2']) || isset($_GET['semestre3']) ||isset($_GET['semestre4']) ||isset($_GET['semestre5']))
    { include 'semestre.php';}
    
    if(isset($_GET['member'])){
        include './members.php';
    }

    if(isset($_GET['terms'])){
        include './terms.php';
    }

    if(isset($_GET['contact'])){
        include './contact.php';
    }

    if(isset($_GET['about'])){
        include './about.php';
    }

    if(isset($_GET['faqs'])){
        include './faqs.php';
    }
    if(isset($_GET['teacher'])){
        include './teacher.php';
    }
?>