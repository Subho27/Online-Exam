<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','onlineexam');

function ResultCalculate()
{
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ("Failed to Connect to database".mysqli_error());

	$db = mysqli_select_db($con,DB_NAME) or die("Failed to select Database".mysqli_error($con));

	session_start();
	$email = $_SESSION['u_info']['email'];
	$ans = [];
	$total = $_GET['number'];
	$exam = $_GET['exam_id'];
	for($i = 1;$i <= $total;$i++)
	{
		array_push($ans,$_POST['radio'.$i]);
	}
	
	$ans_str = implode("",$ans);
	$tot = 0;
	
	$sql = "insert into $exam values('$email','$ans_str','$tot')";
	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	
	if($query)
	{
		print "<script>alert('Answers successfully submitted.');</script>";
		print "<script>window.location.href='index.php'</script>";		
    }
}

function CheckSubmission()
{
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ("Failed to Connect to database".mysqli_error());

	$db = mysqli_select_db($con,DB_NAME) or die("Failed to select Database".mysqli_error($con));
	
	$exam = $_GET['exam_id'];
	$email = $_SESSION['u_info']['email'];
	$sql = "select * from $exam where email='$email'";
	$q = mysqli_query($con,$sql);
	
	if($r = mysqli_fetch_array($q))
	{
		print "<script>alert('You have already submitted answers.')</script>";
		print "<script>window.location.href='index.php'</script>";
    }
	else
		ResultCalculate();
}

if(isset($_POST['submit']))
{
	CheckSubmission();
}
?>