<?php

if(isset($_POST['proceed']))
{
	include 'connection.php';
	$id = $_POST['id'];
	$noq = $_POST['number'];
	$question = $_POST['question'];
	
	$marks = $_POST['marks'];
	$op1 = $_POST['option1'];
	$op2 = $_POST['option2'];
	$op3 = $_POST['option3'];
	$op4 = $_POST['option4'];
	$answer = $_POST['answer'];
	$noq_new =(int)$noq - 1;
	$fname=$_FILES['image']['name'];
	$ftype=$_FILES['image']['type'];
	$fsize=$_FILES['image']['size'];
	$fpath="upload-files/".rand(0000000,9999999)."_".$fname;
	
	if(move_uploaded_file($_FILES['image']['tmp_name'],$fpath)){
	$sql = "insert into $id values('$question','$fpath','$fname','$marks','$op1','$op2','$op3','$op4','$answer')";

	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	
	$sql1 = "SELECT COUNT(*) FROM $id";
	$query1 = mysqli_query($con,$sql1) or die("Error ".mysqli_error($con));
	
	if($r = mysqli_fetch_array($query1))
	{
		if($query)
		{
			if($noq_new == 0)
			{
				print "<script>alert('All questions successfully submitted.');</script>";
				print "<script>window.location.href='index1.php'</script>";
			}
			else
			{
				print "<script>window.location.href='ready_a_set.php?test_id=$id&noq=$noq_new'</script>";
			}
		}
		else
		{
			print "<script>alert('Sorry,there is an error');</script>";
			print "<script>window.location.href='ready_a_set.php?test_id=$id&noq=$noq'</script>";
		}
    }
	else{
		print "<script>alert('Unknown error.');</script>";
		print "<script>window.location.href='teacher.php'</script>";
	}
	}else{
	header('location:ready_a_set.php?msg=unsucessfull');
}
	
	
}

?>