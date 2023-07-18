<?php
	$subject =[];
	$id = [];
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$email = $_SESSION['u_info']['email'];
	include 'connection.php';
	$sql = "select subject,id from tests where email='$email'";
	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	if($query)
	{
		while($r = mysqli_fetch_array($query))
		{
			array_push($subject, $r['subject']);
			array_push($id, $r['id']);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Examination</title>
</head>
	<h3>Tests you have taken : </h3>
	<p><?php
			for($i = 0;$i < sizeof($subject);$i++) {
			?>
			<a href="student_result.php?exam_id=<?php print $id[$i]; ?>"><input type="button" value="<?php print $subject[$i]; ?>" /></a><br/><hr/><br/>
		<?php		
			}
		?></p>
<body>
	
</body>

</html>