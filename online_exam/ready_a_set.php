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
				
            </ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index1.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Ready Question Papers</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
    
	<section class="contact-page spad pt-0">
		<div class="container border-0">
			<div class="map-section">
				
               
				<div class="section-title text-center">
					<h3>SET YOUR QUESTIONS</h3>	
				</div>
                <div class="col-auto">
                <?php
					$email=$_SESSION['u_info']['email'];
					$test_id=$_GET['test_id'];
					$noq=$_GET['noq'];
					$src="SELECT * FROM tests WHERE id='$test_id'";
					$rs=mysqli_query($con,$src)or die(mysqli_error($con));
					$rec=mysqli_fetch_assoc($rs);
					
				?>
            <form name="insert" method="post" enctype="multipart/form-data" action="questions_db.php">
            <div class="form-row">
			<div class="form-control-lg">
            <label for="exampleInputPassword1">Subject:</label>
            <input class="form-control" id="exampleInputItemName" type="text" name="subject" required value="<?php echo $rec['subject'];?>" readonly>
          </div>
          
          <div class="form-control-lg">
          <label for="exampleInputPassword1">No. of Questions Left:</label>
            <input class="form-control" id="exampleInputItemName" type="number" placeholder="No. of Questions" name="number" required value="<?php echo $noq;?>" readonly>
          </div>
          
          
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Full Marks:</label>
            <input class="form-control" id="exampleInputItemName" type="number" placeholder="Total Marks" name="marks" required value="<?php echo $rec['marks'];?>" readonly>
          </div>
          <div class="form-control-lg">
          <label for="exampleInputPassword1">Unique Paper Code:</label>
            <input class="form-control" id="exampleInputItemName" type="text" placeholder="Paper Code" name="id" required value="<?php echo $rec['id'];?>" readonly>
          </div>
          </div>
            <div class="form-row">
            <div class="form-control-lg">
            <label for="exampleInputPassword1">Write Questions Here:</label>
            <textarea class="form-control" rows="1" cols="58" name="question" placeholder="type your questions here.."></textarea>
          </div>
          <div class="form-control-lg">
		<label>Marks :</label>
		<input class="form-control" type="number" name="marks" placeholder="marks for this question" min="1" >
        </div>
        <div class="form-control-lg">
		<label>Right Answer :   </label>
		<input class="form-control" type="number" name="answer" placeholder="e.g.1    " min="1" max="4" >
           </div> 
        </div>  
        <div class="form-row">
		<div class="form-control-lg">
        Put your options here:<br>
							<ol>
								<li><input type="text" name="option1" placeholder="1st option"></li>
								<li><input type="text" name="option2" placeholder="2nd option"></li>
								<li><input type="text" name="option3" placeholder="3rd option"></li>
								<li><input type="text" name="option4" placeholder="4th option"></li>
							</ol>
         </div>
         <div class="form-control-lg">
          Add a diagram(optional) :
		<input class="form-control" type="file" name="image"> 
		</div>
         
         
            </div>
            
            
              
				
			<div class="text-center">
					<input type="submit" name="proceed" value="PROCEED" class="site-btn btn-block">
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