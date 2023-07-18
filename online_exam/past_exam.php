<?php
	$question = [];
	$op1 = [];
	$op2 = [];
	$op3 = [];
	$op4 = [];
	$right = [];
	$id = $_GET['exam_id'];
	include 'connection.php';
	$sql = "select question,op1,op2,op3,op4,answer from $id";
	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	if($query)
	{
		while($r = mysqli_fetch_array($query))
		{
			array_push($question, $r['question']);
			array_push($op1, $r['op1']);
			array_push($op2, $r['op2']);
			array_push($op3, $r['op3']);
			array_push($op4, $r['op4']);
			$answer = (int)$r['answer'];
			array_push($right,$answer);
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
				<li class="active"><a href="exam.php"><<Back</a></li>
				
            </ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Right Answers</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	
    
    

	&nbsp;<h2>Right answers are : </h2>
    <div class="container-fluid">
    <div class="row">
    <div class="col">
	<div id="up" class="tabcontent">
	  <p><?php
			for($i = 0;$i < sizeof($question);$i++) {
			?>
			<h4><?php print ($i+1)." . ".$question[$i]." : <br>";?></h4>
				 <h5 class="text-success"><?php
					if($right[$i] == 1)
						print " 1-- ".$op1[$i];
					else if($right[$i] == 2)
						print " 2-- ".$op2[$i];
					else if($right[$i] == 3)
						print " 3-- ".$op3[$i];
					else
						print " 4-- ".$op4[$i];
				?></h5><hr/>
		<?php		
			}
		?></p>
	</div>
    </div>
    </div>
    </div>
    
    
    
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