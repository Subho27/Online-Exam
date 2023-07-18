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
				<li><a href="index.php">Home</a></li>
				
				
				<li class="active"><a href="my_profile_student.php">My Profile</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Update Profile</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
    
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				
               
				<div class="section-title text-center">
					<h3>UPDATE YOUR PROFILE</h3>
					
				</div>
                <?php
					$pass=$_SESSION['u_info']['pass'];
					$src="SELECT * FROM registration WHERE pass='$pass'";
					$rs=mysqli_query($con,$src)or die(mysqli_error($con));
					$rec=mysqli_fetch_assoc($rs);
				?>
				<form name="frm" method="post" class="comment-form --contact">
					<div class="row">
						<div class="col-lg-4">
                        	<h4>NAME:</h4>
							<input type="text" name="name" required value="<?php echo $rec['name'];?>">
						</div>
						<div class="col-lg-4">
                        	 <h4>EMAIL ID:</h4>
							<input type="email"  name="email" required value="<?php echo $rec['email'];?>">
						</div>
						
						<div class="col-lg-4">
							 <h4>PHONE NUMBER:</h4>
                            <input type="text" name="phn" required value="<?php echo $rec['phn'];?>">
                        </div>
                        <div class="col-lg-4">
							 <h4>PASSWORD:</h4>
                             <p><h6>(This field can't be changed)</h6></p>
                            <input type="text" name="pass" required value="<?php echo $rec['pass'];?>" readonly>
						<div class="text-center">
							<input type="submit" name="update" value="UPDATE" class="site-btn"></button>
							</div>
						</div>
					</div>
				</form>
					<?php
					if(isset($_POST['update'])){
						$name=$_POST['name'];
						$email=$_POST['email'];
						$password=$_POST['pass'];
						$phone=$_POST['phn'];
						$upd="UPDATE registration SET name='$name',email='$email',phn='$phone' WHERE pass='$password'";
						$ures=mysqli_query($con,$upd)or die(mysqli_error($con));
						if($ures==1){
							header('location:login_student_teacher.php?msg=update succesfully');
						}
						else{
							echo "not updated";
						}
						}
					?>
                
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
                
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