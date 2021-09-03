<?php

include 'student_conn.php';

	$result_data=array();
	$is_result=false;
	$result=mysqli_query($con,"select * from results where student_id='".$_SESSION['id']."'");
	if(mysqli_num_rows($result)>0){
		$is_result=true;
		$result_row=mysqli_fetch_assoc($result);
		$data_qr=mysqli_query($con,"select result_data.*,modules.module from result_data,modules where modules.id=result_data.subject_id and result_data.result_id='".$result_row['id']."'");

		while($row=mysqli_fetch_assoc($data_qr)){
			array_push($result_data,$row);
		}
		echo mysqli_error($con);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Result</title>

</head>
<body>
<div class="container">
	<div class="row">
	
	</div>
	<div class="row">
	<?php if($is_result) { ?>
		<div class="col-lg-12"  style="margin-top:50px; height:480px; overflow-y: auto; border :5px solid #2c4a7f; padding:80px; background-image:url(assets/images/back1.png); background-size:cover; background-position:center;" >
		
			<table class="table">
			
				<tr><th colspan="3">Result</th></tr>
				<tr>
					<th>Subject</th>
					<th>Marks</th>
					<th>Marks Obtained</th>
				</tr>
				<?php foreach($result_data as $result): ?>
					<tr>
						<td>
							<?php echo $result['module']; ?>
						</td>
						<td>
							100
						</td>
						<td>
							<?php echo $result['marks']; ?>
						</td>
					</tr>
				<?php endforeach ;?>
			</table>
		</div>
	<?php } else { ?>
		<div class="col-lg-12" style="margin-top:30px; margin-left:30px;">
			<h2>Result Not Found !</h2>
		</div>
	<?php }	?>
</div>
</div>
</body>
</html>	
