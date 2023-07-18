<?php
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','onlineexam');
	session_start();
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die ("Failed to Connect to database".mysqli_error());

	$db = mysqli_select_db($con,DB_NAME) or die("Failed to select Database".mysqli_error($con));
?>
