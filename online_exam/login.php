<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','onlineexam');

function login()
{
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ("Failed to Connect to database".mysqli_error());

	$db = mysqli_select_db($con,DB_NAME) or die("Failed to select Database".mysqli_error($con));

	$email = $_POST['email'];
	$pass = $_POST['pass'];


	$sql = "select * from registration where email='$email' and pass='$pass'";

	$query = mysqli_query($con,$sql);

	if($row = mysqli_fetch_array($query))
	{
		session_start();
		$_SESSION['em']= $email;
		if($row['who'] == "Teacher")
		{
			print "<script>window.location.href='teacher.php'</script>";
		}
		else
		{
			print "<script>window.location.href='student.php'</script>";
		}
	}
	else
	{
		print "<script>alert('Invalid credentials.Try again');</script>";
		print "<script>window.location.href='index.html'</script>";
	}
}
if(isset($_POST['sub'])){
	login();
}
?>