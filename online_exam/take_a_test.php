<?php
require("connection.php");
require("check_session.php");
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
				<li><a href="index1.php">Home</a></li>
				<li class="active"><a href="take_a_test.php">Take A Test</a></li>
				
            </ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index1.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Take A Test</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
    
	<section class="contact-page spad pt-0">
		<div class="container border-0">
			<div class="map-section">
				
               
				<div class="section-title text-center">
					<h3>READY FOR A TEST</h3>	
				</div>
                <div class="col">
            <form name="insert" method="post" enctype="multipart/form-data" action="test_set.php">
            <div class="form-row">
			<div class="form-control-lg">
            <label for="exampleInputPassword1">Subject:</label>
            <input class="form-control" id="exampleInputItemName" type="text" placeholder="Subject Name" name="subject" required>
          </div>
          <div class="form-control-lg">
            <label for="exampleInputSpicy">For Which Year</label>
            <select name="year" class="form-control">
            <option value="" selected>-Select-</option>
            <option value="first">1st Year</option>
            <option value="second">2nd Year</option>
            <option value="third">3rd Year</option>
            <option value="forth">4th Year</option>
            </select>
            
          </div>
         
          <div class="form-control-lg">
            <label for="exampleInputSpicy">For Which Department</label>
            <select name="department" class="form-control">
            <option value="" selected>-Select-</option>
            <option value="information">Information Technology</option>
            <option value="computersc">Computer Science & Engineering</option>
            <option value="leather">Leather Technology</option>
            <option value="itcseboth">IT + CSE (only for 1st year)</option>
            </select>
            
          </div>
          </div>
            
            
            <div class="form-row">
          <div class="form-control-lg">
          <label for="exampleInputPassword1">No. of Questions:</label>
            <input class="form-control" id="exampleInputItemName" type="number" placeholder="No. of Questions" name="number" required>
          </div>
          
          
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Full Marks:</label>
            <input class="form-control" id="exampleInputItemName" type="number" placeholder="Total Marks" name="marks" required>
          </div>
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Unique Paper Code:</label>
            <input class="form-control" id="exampleInputItemName" type="text" placeholder="Paper Code" name="id" required>
          </div>
          </div>
            
            
            <div class="form-row">
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Date:</label>
            <input class="form-control" id="exampleInputItemName" type="date" name="date" required>
          </div>
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Starting Time:</label>
            <input class="form-control" id="exampleInputItemName" type="time" value="00:00" name="time" required>
          </div>
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Duration:</label>
            <input class="form-control" id="exampleInputItemName" type="time" value="00:00" name="endtime" required>
          </div>
          </div>
              
				
			<div class="text-center">
					<a href="ready_a_set.php"><input type="submit" name="proceed" value="PROCEED" class="site-btn btn-block"></a>
							</div>
                </form>
                </div>
	
				
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