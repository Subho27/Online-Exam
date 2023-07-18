<?php //require("connection.php");?>
<?php
	/*if(isset($_POST['proceed'])){
		$email=$_SESSION['u_info']['email'];
		$subject=$_POST['subject'];
		$year=$_POST['year'];
		$department=$_POST['department'];
		$date=$_POST['date'];
		$number=$_POST['number'];
		$marks=$_POST['marks'];
		$papercode=$_POST['id'];
		$start=$_POST['time'];
		$end=$_POST['endtime'];
		$sql="INSERT INTO tests(email,subject,department,date,time,number,marks,id,year,endtime)VALUES('$email','$subject','$department','$date','$start','$number','$marks','$papercode','$year','$end')";
		$res=mysqli_query($con,$sql)or die(mysqli_error($con));
		if($res==1){
		
		header('location:ready_a_set.php?msg=successfull');
		}else{
		
		header('location:take_a_test.php?msg=unsuccessfull');
		}
		}*/
?>
<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','onlineexam');

function NewTest()
{
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ("Failed to Connect to database".mysqli_error());

	$db = mysqli_select_db($con,DB_NAME) or die("Failed to select Database".mysqli_error($con));
	session_start();
	$email = $_SESSION['u_info']['email'];
	$subject = $_POST['subject'];
	$year = $_POST['year'];
	$department = $_POST['department'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$duration = $_POST['endtime'];
	$noq = $_POST['number'];
	$marks = $_POST['marks'];
	$id = $_POST['id'];
	
	$sql1 = "CREATE TABLE $id (
    question VARCHAR(500),
    img_path VARCHAR(500),
	img_name VARCHAR(500),
    marks INT(100),
    op1 VARCHAR(250),
    op2 VARCHAR(250),
    op3 VARCHAR(250),
    op4 VARCHAR(250),
	answer INT(5))";

	$query1 = mysqli_query($con,$sql1) or die("Error ".mysqli_error($con));
	
	$answer = $id."answer";
	
	$sql2 = "CREATE TABLE $answer (
    email VARCHAR(50),
    ans VARCHAR(100),
	total INT(50))";

	$query2 = mysqli_query($con,$sql2) or die("Error ".mysqli_error($con));
	
	$sql = "insert into tests values('$email','$subject','$department','$date','$time','$noq','$marks','$id','$year','$duration')";

	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	
	if($query)
	{
		print "<script>alert('Entry Successful');</script>";
		print "<script>window.location.href='ready_a_set.php?test_id=$id&noq=$noq'</script>";		
    }
}
function CheckEntry()
{
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ("Failed to Connect to database".mysqli_error());

	$db = mysqli_select_db($con,DB_NAME) or die("Failed to select Database".mysqli_error($con));
	
	$x = $_POST['id'];
	
	$sql = "select * from tests where id='$x'";
	$q = mysqli_query($con,$sql);
	
	if($r = mysqli_fetch_array($q))
	{
		print "<script>alert('Use different Id for your test.')</script>";
		print "<script>window.location.href='take_a_test.php'</script>";
    }
	else
		NewTest();
}
if(isset($_POST['proceed']))
{
	CheckEntry();
}
?>