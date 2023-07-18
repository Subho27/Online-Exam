<?php
	$time = [];
	$date = [];
	$duration = [];
	$upcoming = [];
	$upcoming_id = [];
	$running = [];
	$running_id = [];
	$past = [];
	$past_id = [];
	include 'connection.php';
	session_start();
	if(isset($_SESSION['em']))
	{
		$sql = "select subject,id from tests where date > CURRENT_DATE";
		$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
		if($query)
		{
			while($r = mysqli_fetch_array($query))
			{
				array_push($upcoming, $r['subject']);
				array_push($upcoming_id, $r['id']);
			}
		}
		
		$sql1 = "select subject,id from tests where date = CURRENT_DATE and time > CURRENT_TIME";
		$query1 = mysqli_query($con,$sql1) or die("Error ".mysqli_error($con));
		if($query1)
		{
			while($r1 = mysqli_fetch_array($query1))
			{
				array_push($upcoming, $r1['subject']);
				array_push($upcoming_id, $r1['id']);
			}
		}
		
		$sql2 = "select subject,date,time,duration,id from tests where date = CURRENT_DATE and time <= CURRENT_TIME and time+duration >= CURRENT_TIME";
		$query2 = mysqli_query($con,$sql2) or die("Error ".mysqli_error($con));
		if($query2)
		{
			while($r2 = mysqli_fetch_array($query2))
			{
				array_push($running, $r2['subject']);
				array_push($running_id, $r2['id']);
				array_push($duration, $r2['duration']);
				array_push($date, $r2['date']);
				array_push($time, $r2['time']);
			}
		}
		
		$sql3 = "select subject,id from tests where date < CURRENT_DATE";
		$query3 = mysqli_query($con,$sql3) or die("Error ".mysqli_error($con));
		if($query3)
		{
			while($r3 = mysqli_fetch_array($query3))
			{
				array_push($past, $r3['subject']);
				array_push($past_id, $r3['id']);
			}
		}
		
		$sql4 = "select subject,id from tests where date = CURRENT_DATE and time < CURRENT_TIME and time+duration < CURRENT_TIME";
		$query4 = mysqli_query($con,$sql4) or die("Error ".mysqli_error($con));
		if($query4)
		{
			while($r4 = mysqli_fetch_array($query4))
			{
				array_push($past, $r4['subject']);
				array_push($past_id, $r4['id']);
			}
		}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Examination</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {font-family: Arial;}

		/* Style the tab */
		.tab {
		  overflow: hidden;
		  border: 1px solid #ccc;
		  background-color: #f1f1f1;
		}

		/* Style the buttons inside the tab */
		.tab button {
		  background-color: inherit;
		  float: left;
		  border: none;
		  outline: none;
		  cursor: pointer;
		  padding: 14px 16px;
		  transition: 0.3s;
		  font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		  background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
		  background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
		  display: none;
		  padding: 6px 12px;
		  border: 1px solid #ccc;
		  border-top: none;
		}
	</style>
	<script>
	window.location.hash="no-back-button";
	window.location.hash="Again-No-back-button";
	window.onhashchange=function(){window.location.hash="no-back-button";}
	</script>
</head>
<body>

	<a href="profile.php"><input type="button" value="My Profile" /></a>

	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'up')">Upcoming</button>
	  <button class="tablinks" onclick="openCity(event, 'run')">Running</button>
	  <button class="tablinks" onclick="openCity(event, 'past')">Past Exams</button>
	</div>

	<div id="up" class="tabcontent">
	  <h3>Upcoming</h3>
	  <p><?php
			for($i = 0;$i < sizeof($upcoming);$i++) {
			?>
			<a href="upcoming.php?exam_id=<?php print $upcoming_id[$i]; ?>"><input type="button" value="<?php print $upcoming[$i]; ?>" /></a><br/><br/>
		<?php		
			}
		?></p>
	</div>

	<div id="run" class="tabcontent">
	  <h3>Running</h3>
	  <p><?php
			for($j = 0;$j < sizeof($running);$j++) {
			?>
			<a href="running.php?exam_id=<?php print $running_id[$j]; ?>"><input type="button" value="<?php print $running[$j]; ?>" /></a>
			

			<br/><br/>
		<?php		
			}
		?></p>
	</div>

	<div id="past" class="tabcontent">
	  <h3>Past Exams</h3>
	  <p><?php
			for($k = 0;$k < sizeof($past);$k++) {
			?>
			<a href="pastexam.php?exam_id=<?php print $past_id[$k]; ?>"><input type="button" value="<?php print $past[$k]; ?>" /></a><br/><br/>
		<?php		
			}
		?></p>
	</div>

	<script>
	function openCity(evt, cityName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	</script>
	
	<br/><br/>
	<form action="logout.php" method="post">
		<input type="submit" name="sub" value="Logout" /></a>
	</form>
	
</body>
</html>
<?php
  }
  else{
	  print "<script>alert('Please Login');</script>";
	  print "<script>window.location.href='login_ui.php'</script>";
  }
  ?>