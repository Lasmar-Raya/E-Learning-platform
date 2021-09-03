<?php
session_start();
include 'connect.php';
	$result_qr=mysqli_query($con,"select * from results where student_id='".$_REQUEST['id']."'");
	if(mysqli_num_rows($result_qr)>0){
		header("Location:teacher_home.php?error=Student Result Already Exist");	
	}
	$subjects=array();
	$subject_qr=mysqli_query($con,"select * from modules");
	while($row=mysqli_fetch_assoc($subject_qr)){
		array_push($subjects,$row);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Result</title>
		<?php include 'css.php'; ?>
</head>
<body>
	<div class="container">
	<div class="row">
			<div col-lg-12>
				<h2 style="margin: 10px">Add Result</h2>
			</div>
	</div>
	<form action="add_result_post.php" method="post">
		<!-- <div class="row">
			<div col-lg-12>
				<a href="teacher_home.php" style="margin: 10px" class="btn btn-success">Home</a>
			</div>
		</div> -->
		
		<div class="row">

				<input type="hidden" name="student_id" value="<?php echo $_REQUEST['id']; ?>">
				<?php foreach($subjects as $subject) : ?>
					<div class="col-lg-12 form-group">
						<label><?php echo $subject['module']; ?></label>
						<input type="hidden" name="id[]" value="<?php echo $subject['id']; ?>">
						<input type="text" name="marks[]" class="form-control" placeholder="Marks">
						
					</div>
				<?php endforeach; ?>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-info" type="submit">Add Result</button>
				</div>
		</div>		
		</form>
	</div>
</body>
</html>
