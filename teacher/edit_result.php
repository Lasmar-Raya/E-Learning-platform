<?php
session_start();
include 'connect.php';
	$is_result=false;
	$result_data=array();
	$result_qr=mysqli_query($con,"select * from results where student_id='".$_REQUEST['id']."'");
	if(mysqli_num_rows($result_qr)>0){
		$is_result=true;
		$row=mysqli_fetch_assoc($result_qr);
		//fetching result
		$result_row=$row;

		$result_data_qr=mysqli_query($con,"select result_data.*,modules.module from result_data,modules where result_data.result_id='".$result_row['id']."' and result_data.subject_id=modules.id");
		while ($row=mysqli_fetch_assoc($result_data_qr)) {
			array_push($result_data,$row);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Result</title>
	<?php include 'css.php'; ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<form action="edit_result_post.php" method="post">
		<input type="hidden" name="result_id" value="<?php echo $result_row['id']; ?>">
		<input type="hidden" name="student_id" value="<?php echo $_REQUEST['id']; ?>">
		<div class="row">
			<div col-lg-12>
				<a href="../profile.php?note" style="margin: 10px ;" class="btn btn-info"><i class="fa fa-arrow-left" ></i></a>
			</div>
		</div>
		<div class="row">
			<div col-lg-12>
				<h2 style="margin: 10px">Edit Result</h2>
			</div>
		</div>
		<?php if($is_result){ ?>
			<div class="row">
				<?php foreach($result_data as $result)  : ?>
					<div class="col-lg-12 form-group">
						<label><?php echo $result['module']; ?></label>
						<input type="hidden" name="id[]" value="<?php echo $result['id']; ?>">
						<input type="text" name="marks[]" value="<?php echo $result['marks']; ?>" class="form-control">
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-info" type="submit">Edit Result</button>
				</div>
			</div>	
	  	<?php } else { ?>
	  	<div class="row">
	  		<div class="col-lg-12">
	  			No Result Found, <a href="add_result.php?id=<?php echo $_REQUEST['id']; ?>" >Add Result</a>
	  		</div>
	  	</div>
	  	<?php } ?>	
	  </form>
	</div>
</body>
</html>

