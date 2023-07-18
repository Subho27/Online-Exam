<?php
	$running_time = [];
	$running_date = [];
	$running_duration = [];
	$upcoming_time = [];
	$upcoming_date = [];
	$upcoming_duration = [];
	$time = [];
	$date = [];
	$endtime = [];
	$upcoming = [];
	$upcoming_id = [];
	$running = [];
	$running_id = [];
	$past = [];
	$past_id = [];
	include 'connection.php';
	
	if(isset($_SESSION['u_info']['email']))
	{
		$sql = "select subject,date,time,endtime,id from tests where date > CURRENT_DATE";
		$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
		if($query)
		{
			while($r = mysqli_fetch_array($query))
			{
				array_push($upcoming, $r['subject']);
				array_push($upcoming_id, $r['id']);
				array_push($upcoming_duration, $r['endtime']);
				array_push($upcoming_date, $r['date']);
				array_push($upcoming_time, $r['time']);
			}
		}
		
		$sql1 = "select subject,date,time,endtime,id from tests where date = CURRENT_DATE and time > CURRENT_TIME";
		$query1 = mysqli_query($con,$sql1) or die("Error ".mysqli_error($con));
		if($query1)
		{
			while($r1 = mysqli_fetch_array($query1))
			{
				array_push($upcoming, $r1['subject']);
				array_push($upcoming_id, $r1['id']);
				array_push($upcoming_duration, $r1['endtime']);
				array_push($upcoming_date, $r1['date']);
				array_push($upcoming_time, $r1['time']);
			}
		}
		
		$sql2 = "select subject,date,time,endtime,id from tests where date = CURRENT_DATE and time <= CURRENT_TIME and time+endtime >= CURRENT_TIME";
		$query2 = mysqli_query($con,$sql2) or die("Error ".mysqli_error($con));
		if($query2)
		{
			while($r2 = mysqli_fetch_array($query2))
			{
				array_push($running, $r2['subject']);
				array_push($running_id, $r2['id']);
				array_push($running_duration, $r2['endtime']);
				array_push($running_date, $r2['date']);
				array_push($running_time, $r2['time']);
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
		
		$sql4 = "select subject,id from tests where date = CURRENT_DATE and time < CURRENT_TIME and time+endtime < CURRENT_TIME";
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
<html lang="en">
<head>
	<title>Unica - University Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css2/bootstrap.min.css"/>
	<link rel="stylesheet" href="css2/font-awesome.min.css"/>
	<link rel="stylesheet" href="css2/themify-icons.css"/>
	<link rel="stylesheet" href="css2/owl.carousel.css"/>
	<link rel="stylesheet" href="css2/style.css"/>
	
    
    <script>
	window.location.hash="no-back-button";
	window.location.hash="Again-No-back-button";
	window.onhashchange=function(){window.location.hash="no-back-button";}
	</script>
	
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

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			
			<ul class="main-menu">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="exam.php">Exam Schedule</a></li>
				
            </ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Exam Time!!!</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg" style="margin-top:20px;margin-buttom:20px">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 fact">
					
					<div class="contact-info">
						<button class="site-btn" onclick="openCity(event, 'up')">Upcoming Exams</button>
					</div>
				</div>
				
                <div class="col-sm-6 col-lg-3 fact">
					
					<div class="contact-info">
						<button class="site-btn" onclick="openCity(event, 'run')">Running Exams</button>
					</div>
				</div>
                
				<div class="col-sm-6 col-lg-3 fact">
					
					<div class="contact-info">
						<button class="site-btn" onclick="openCity(event, 'past')">Past Exams</button>
						<!--<p class="text-white">Exams</p>-->
					</div>
				</div>
				
			</div>
            
		</div>
	</section>
    
    

	<div id="up" class="tabcontent">
	  <h3>Upcoming Exams :</h3>
	  <p><h4 class="text-uppercase text-primary"><?php
			for($i = 0;$i < sizeof($upcoming);$i++) {?>
				<section class="counter-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-6">
								<div class="big-icon">
									<i class="fa fa-graduation-cap"></i>
								</div>
								<div class="counter-content">
									<h2><?php print_r($upcoming[$i]); ?></h2>
									<p><i class="fa fa-calendar-o"></i><?php print $upcoming_date[$i]; ?></p>
									<p><i class="fa fa-clock-o"></i>Start time : <?php print $upcoming_time[$i]; ?></p>
									<p><i class="fa fa-cog fa-spin"></i>Duration : <?php print $upcoming_duration[$i]; ?></p>
								</div>
							</div>
							<div class="col-lg-5 col-md-6">
							</div>
						</div>
					</div>
				</section>
			<?php }
		?></h4></p>
	</div>

	<div id="run" class="tabcontent">
	  <h3>Running Exams :</h3>
	  <p><?php
			for($j = 0;$j < sizeof($running);$j++) {
			?>
			<a href="running_exam.php?exam_id=<?php print $running_id[$j]; ?>"><section class="counter-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6">
							<div class="big-icon">
								<i class="fa fa-graduation-cap"></i>
							</div>
							<div class="counter-content">
								<h2><?php print $running[$j]; ?></h2>
								<p><i class="fa fa-clock-o"></i>End time : <?php print gettype(time($running_time[$j])+time($running_duration[$j])); ?></p>
							</div>
						</div>
						<div class="col-lg-5 col-md-6">
						</div>
					</div>
				</div>
			</section></a>
			<br/><br/>
		<?php		
			}
		?></p>
	</div>

	<div id="past" class="tabcontent">
	  <h3>Past Exams :</h3>
      
      <div class="col">
	  <p><?php
			for($k = 0;$k < sizeof($past);$k++) {
			?>
			<a href="past_exam.php?exam_id=<?php print $past_id[$k]; ?>"><!--<button value="<?php /*print_r($past[$k]);*/ ?>">-->
			<section class="counter-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6">
							<div class="big-icon">
								<i class="fa fa-graduation-cap"></i>
							</div>
							<div class="counter-content">
								<h2><?php print_r($past[$k]); ?></h2>
								<p><i class="fa fa-ban"></i>Deadline for this test is over.</p>
							</div>
						</div>
						<div class="col-lg-5 col-md-6">
						</div>
					</div>
				</div>
			</section></a><br/><br/>
		<?php		
			}
		?></p>
	</div>
    
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
	
	
	<?php
  }
  else{
	  print "<script>alert('Please Login');</script>";
	  print "<script>window.location.href='login_student_teacher.php'</script>";
  }
  ?>
    
    
    
	<!-- Footer section -->
	<?php require('footer.php');?>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js2/jquery-3.2.1.min.js"></script>
	<script src="js2/owl.carousel.min.js"></script>
	<script src="js2/jquery.countdown.js"></script>
	<script src="js2/masonry.pkgd.min.js"></script>
	<script src="js2/magnific-popup.min.js"></script>
	<script src="js2/main.js"></script>


	
	
</body>
</html>