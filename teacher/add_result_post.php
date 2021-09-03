<?php
session_start();
include 'connect.php';

	$qr_result=mysqli_query($con,"INSERT into results (student_id,teacher_id) values ('".$_REQUEST['student_id']."','".$_SESSION['id']."')");
	if($qr_result){
		$last_id=mysqli_insert_id($con);
		$marks_Array=$_POST['marks'];
		$subject_id_array=$_POST['id'];
		foreach($marks_Array as $key=>$marks){
			$mark_qr=mysqli_query($con,"INSERT into result_data (result_id,subject_id,marks) values ('".$last_id."','".$subject_id_array[$key]."','".$marks."')");
		}
		header("Location:../profile.php?note&success=Added Result Successfully");
	}
	else{
		header("Location:../profile.php?note&error=Failed to Add Student");	
	}

?>
