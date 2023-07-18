<?php 
require("connection.php");
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
    
   <script language="javascript" type="text/javascript">
   function confirmation(anchor){
   var conf=confirm('Are You Sure To Delete? Because They Are Not Recoverable.');
   if(conf)
   window.location=anchor.attr("href");
   }
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
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>40 Baria Street 133/2, New York City, US</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			
			<ul class="main-menu">
				<li><a href="index.php">Home</a></li>
				
				
				<li class="active"><a href="my_profile.php">My Profile</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>My Profile</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
    
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				
                <div class="contact-info-warp con w-100 mh-100">
                <div class="contact-info">
						<h6 style="color:white;text-align:center;text-decoration:underline;">-: Your Details :-</h6>
						
					</div>
                    <?php
					$pass=$_SESSION['u_info']['pass'];
					$src="SELECT * FROM registration WHERE pass='$pass'";
					$rs=mysqli_query($con,$src)or die(mysqli_error($con));
					$rec=mysqli_fetch_assoc($rs);
					?>
					<div class="contact-info">
						<h4>Your Name</h4>
						<p><?php echo $rec['name'];?></p>
					</div>
					<div class="contact-info">
						<h4>Phone Number</h4>
						<p><?php echo $rec['phn'];?></p>
					</div>
					<div class="contact-info">
						<h4>Email id</h4>
						<p><?php echo $rec['email'];?></p>
					</div>
					<div class="contact-info">
						<h4>Password</h4>
						<p><?php echo $rec['pass'];?></p>
					</div>
                    
                    <div class="contact-info">
                   		<a href="update.php?pass=<?php echo $_SESSION['u_info']['pass'];?>"><button class="pull-right site-btn">Update Profile</button>
                        <a onClick='javascript:confirmation($(this));return false;' href="delete.php?pass=<?php echo $_SESSION['u_info']['pass'];?>"><button class="pull-left site-btn">Delete Profile</button></a>
                        
                   </div>
				</div>
                
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
                
			</div>
			<?php
			if(isset($_GET['msg'])){
				echo $_GET['msg'];
			}
			?>
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