<?php

include 'connect.php';
	$data=array();
	$qr=mysqli_query($con,"select * from users where usertype='2'");
	while($row=mysqli_fetch_assoc($qr)){array_push($data,$row);}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher Home</title>
	<?php include 'css.php'; ?>
</head>
<body>
<div class="container">
	<div class="row">
   		<?php if(isset($_REQUEST['error'])) { ?>
   		<div class="col-lg-12">
   			<span class="alert alert-danger" style="display: block;">
   				<?php echo $_REQUEST['error']; ?>	
			</span>
   		</div>
	   	<?php } ?>
	 </div>
	 <div class="row">
   		<?php if(isset($_REQUEST['success'])) { ?>
   		<div class="col-lg-12">
   			<span class="alert alert-success" style="display: block;">
   				<?php echo $_REQUEST['success']; ?>	
			</span>
   		</div>
	   	<?php } ?>
	 </div>

	<div class="row">
		<div class="col-lg-12">
			<div style="margin-top:60px; width:80%;">
			<table class="table table-bordered " >
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>												
				</tr>
				<?php foreach($data as $d) :?>
				 <tr>
				 	<td><?php echo $d['id']; ?></td>
				 	<td><?php echo $d['name']; ?></td>
				 	<td><?php echo $d['email']; ?></td>	 	
				 	<td><a class="btn btn-info" href="teacher/edit_result.php?&id=<?php echo $d['id']; ?>">Edit Result</a></td>	 	
				 </tr>
				 <?php endforeach;?>
			</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
