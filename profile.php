<?php
    session_start();
    $source="mysql:host=localhost;dbname=research";
    $login ="root";
    $mdp ="";

    try
    {
        $con=new PDO($source,$login,$mdp);
        
    }
    catch(PDOException $e)
    {
        $error_message= $e->getMessage();
        echo $error_message;
        exit();
    }

?>

<!doctype html>
<html lang="en">
  <head>
      <title>Profile</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/style_profil.css">
      <link rel="icon"  href="assets/images/favicons/2.png">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary"></button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(assets/images/user2.png); background-size:cover;">
	  			<div class="user-logo">
            <!-- <div class="img" style="background-image: url(assets/images/abdul.jpg);"></div> -->
            <div>
            <?php
              $email=$_SESSION['email'];
              $get_contact=$con->prepare("select * from users where email='$email'");
              $get_contact->setFetchMode(PDO:: FETCH_ASSOC);
              $get_contact->execute();
              $row=$get_contact->fetch();
       
                if(file_exists("assets/avatar/". $row['id'] . "/" . $row['avatar']) )
                {
                echo"  <img src='assets/avatar/". $row['id'] ."/". $row['avatar']."' style='border-radius:50%;height:200px; width:200px'/ >";
        
                }
                else{
           
                echo "<img src='assets/avatar/defaults/user.png' style='border-radius:50%;height:200px;'/>";
           
                }
            ?>
            </div>
	  				<h3><?php echo "USER : ".$row['name']; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="profile.php?chat"><span class="fa fa-commenting mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Chat</a>
          </li>
          <li>
            <a href="profile.php?info"><span class="fa fa-user-circle  mr-3"></span> Personal info</a>
          </li>
          <li>
              <a href="profile.php?result"><span class="fa fa-file-text-o mr-3 "></span> Result</a>
          </li>
        
          <li>
            <a href="profile.php?settings"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          
          <li>
            <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

      <div id="content" class="p-4 p-md-5 pt-5" style='background-image:url(assets/images/back1.png); background-size:cover; background-position:center; width:100%;'>
      <?php
         $email=$_SESSION['email'];
         $get_contact=$con->prepare("select * from users where email='$email'");
         $get_contact->setFetchMode(PDO:: FETCH_ASSOC);
         $get_contact->execute();
         $row=$get_contact->fetch();
 
      if(isset($_GET['settings']))
      {
        include 'settings.php';
      }
        if(isset($_GET['result']))
        {
          include 'student_home.php';
        }
        if(isset($_GET['chat']))
        {
          
          include 'profile_chat.php';
        }
          
        if(isset($_GET['info']))
        {
          echo "
          <center>
          <div style='margin-top:50px; border :5px solid #2c4a7f; padding-top:80px;padding-bottom:80px; background-image:url(assets/images/back1.png); background-size:cover; background-position:center;'>
          <div style='  box-shadow: 8px 8px 50px #000; color:white; font-size:20px; height:310px; padding-top:60px; width:45%;' > 
          <table >
          <tr><td style='color:#15295d;font-weight:bold; text-align:center; padding-bottom:20px;'>USER NAME : ".$row['name']."</td></tr>
          <tr><td>EMAIL : ".$row['email']."</td></tr>
          <tr><td>PHONE : ".$row['phone']."</td></tr>
          <tr><td>ADDRESS : ".$row['adr']."</td></tr>
          </table></div></div>
          </center>";
        }
        
      ?>
      </div>

		</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>