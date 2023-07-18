<?php
	$total = [];
	$email = [];
	$ansgiven = [];
	$ans = [];
	$marks = [];
	$name = [];
	$id = $_GET['exam_id'];
	$eid = $id.'answer';
	include 'connection.php';
	$sql = "select email,ans from $eid";
	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	if($query)
	{
		while($r = mysqli_fetch_array($query))
		{
			array_push($ansgiven, $r['ans']);
			$em = $r['email'];
			array_push($email, $r['email']);
			$sql1 = "select name from registration where email = '$em'";
			$query1 = mysqli_query($con,$sql1) or die("Error ".mysqli_error($con));
			if($r1 = mysqli_fetch_array($query1))
			{
				array_push($name, $r1['name']);
			}
		}
	}
	
	$sql2 = "select marks,answer from $id";
	$query2 = mysqli_query($con,$sql2) or die("Error ".mysqli_error($con));
	if($query2)
	{
		while($r2 = mysqli_fetch_array($query2))
		{
			array_push($ans, $r2['answer']);
			array_push($marks, $r2['marks']);
		}
	}
	
	for($i = 0; $i < sizeof($name);$i++)
	{
		$tot = 0;
		for($j = 0;$j < sizeof($ans);$j++)
		{
			if((int)$ansgiven[$i][$j] == (int)$ans[$j])
				$tot = $tot + (int)$marks[$j];
		}
		array_push($total,$tot);
	}
	
	for($i = 0;$i < sizeof($email);$i++)
	{
		$sql3 = "update $eid set total='$total[$i]' where email='$email[$i]'";
		$query3 = mysqli_query($con,$sql3) or die("Error ".mysqli_error($con));
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
	 <?php require('header.php');?>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			
			<ul class="main-menu">
				<li><a href="index1.php">Home</a></li>
				<li class="active"><a href="student_result.php">Mail Result</a></li>
				
            </ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index1.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Mail Result</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
    
	<section class="contact-page spad pt-0">
		<div class="container border-0">
			<div class="map-section">
				
               
				<div class="section-title text-center">
					<h3>Students who submitted answers for this test : </h3>	
				</div>
    
	
	<p><a href="mail.php?id=<?php print $eid; ?>"><button>Mail Result</button></a></p>
	<p><?php
			for($i = 0;$i < sizeof($name);$i++) {
			?>
			<h3><?php print ($i+1)." . ".$name[$i]; ?> has given the test and got  : </h3><p><?php print $total[$i]." marks."; ?></p>
			<hr/><br/>
		<?php		
			}
		?></p>

	

                
			</div>
			
		</div>
	</section>
    
	<!-- Courses section end-->
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