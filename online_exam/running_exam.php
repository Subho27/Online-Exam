<?php
	$question = [];
	$img_name=[];
	$img_path=[];
	$op1 = [];
	$op2 = [];
	$op3 = [];
	$op4 = [];
	include 'connection.php';
	$id = $_GET['exam_id'];
	$sql = "select question,img_name,img_path,op1,op2,op3,op4 from $id";
	$query = mysqli_query($con,$sql) or die("Error ".mysqli_error($con));
	if($query)
	{
		while($r = mysqli_fetch_array($query))
		{
			array_push($question, $r['question']);
			array_push($img_name, $r['img_name']);
			array_push($img_path, $r['img_path']);
			array_push($op1, $r['op1']);
			array_push($op2, $r['op2']);
			array_push($op3, $r['op3']);
			array_push($op4, $r['op4']);
		}
	}
	$total = sizeof($question);
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
	<script>
		window.location.hash="no-back-button";
		window.location.hash="Again-No-back-button";
		window.onhashchange=function(){window.location.hash="no-back-button";}
	</script>

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
			<a href="index.html" class="site-logo"><img src="img/logo.png" alt=""></a>
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
				<li><a href="index1.php">Home</a></li>
				<li class="active"><a href="take_a_test.php">Take A Test</a></li>
				<li><a href="#">Results</a></li>
            </ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index1.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>ANSWER YOUR QUESTIONS</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
    
	<section class="contact-page spad pt-0">
		<div class="container border-0">
			<div class="map-section">
				
               
				<div class="section-title text-center">
					<h3>ANSWER YOUR QUESTIONS</h3>	
				</div>
                <div class="container">
                <div class="col-lg-12">
                <div class="row">
            <form action="result_calculate.php?number=<?php print $total; ?>&exam_id=<?php print $id."answer"; ?>" method="post">
            <p><?php
				for($i = 0;$i < $total;$i++) {
				?>
				<p><h5 class="text-danger"><?php print ($i+1)." : ".$question[$i]; ?></h5></p>
               
                <p><img src="<?php print $img_path[$i]; ?>" width="200" height="200" border="2" alt="<?php print $img_name[$i];?>"></p>
                
				
					<input type="radio" name="radio<?php print $i+1; ?>" value="1"><?php print $op1[$i]; ?>
					<input type="radio" name="radio<?php print $i+1; ?>" value="2"><?php print $op2[$i]; ?>
					<input type="radio" name="radio<?php print $i+1; ?>" value="3"><?php print $op3[$i]; ?>
					<input type="radio" name="radio<?php print $i+1; ?>" value="4"><?php print $op4[$i]; ?>
					
			<?php		
				}
			?></p>
		<button class="site-btn" name="submit">submit</button>
            </form>
                </div>
                </div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
                
			</div>
			
		</div>
	</section>
    
	<!-- Courses section end-->
	


	<!--====== Javascripts & Jquery ======-->
	<script src="js2/jquery-3.2.1.min.js"></script>
	<script src="js2/owl.carousel.min.js"></script>
	<script src="js2/jquery.countdown.js"></script>
	<script src="js2/masonry.pkgd.min.js"></script>
	<script src="js2/magnific-popup.min.js"></script>
	<script src="js2/main.js"></script>


	
	
</body>
</html>