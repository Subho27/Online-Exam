<?php
	$name = [];
	$mails = [];
	$total = [];
	include 'connection.php';
	$eid = $_GET['id'];
	$flag = 0;
	$sql = "select email,total from $eid";
	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	if($query)
	{
		while($r = mysqli_fetch_array($query))
		{
			array_push($mails, $r['email']);
			array_push($total, $r['total']);
		}
	}
	for($i = 0;$i < sizeof($mails); $i++)
	{
		$sql1 = "select name from registration where email='$mails[$i]'";
		$query1 = mysqli_query($con,$sql1) or die("Error ".mysqli_error($con));
		if($r1 = mysqli_fetch_array($query1))
		{
			array_push($name, $r1['name']);
		}
	}
	
	for ($x = 0; $x < sizeof($mails); $x++) {
		$to = $mails[$x];
		$subject = "From OnlineExamination";
		$message = "Dear ".$name[$x]." :\n";
		$message .= "You got ".$total[$x]." marks.\n";
		$message .= "Thank you for appearing in the online examination.".$add."\n";
		$headers = "From:Admin of OnlineExamination";
		
		$retval = mail($to,$subject,$message,$headers);
		
		if($retval == false)
		{
			$flag = 1;
			print "<script>alert('Mail could not be sent to'.$mails[$x]);</script>";
		}
	}
	if($flag == 0)
	{
		print "<script>alert('Mail sent successfully.');</script>";
		print "<script>window.location.href='index1.php'</script>";
	}
	else
	{
		print "<script>alert('Sorry, there is a problem.');</script>";
		print "<script>window.location.href='send_results.php'</script>";
	}
?>