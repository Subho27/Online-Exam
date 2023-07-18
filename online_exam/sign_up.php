<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="css\material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

    <div class="main">

        
        <div class="container">
           
            <div class="sign-up-content">
                <form method="POST" name="frm" class="signup-form">
                     
                    <h2 class="form-title">Sign Up for New Student</h2>
                    

                   
                    <div class="form-textbox">
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>

                    

                    <div class="form-textbox">
                        <label>Password</label>
                        <input type="password" name="pass">
                    </div>

                    <div class="form-textbox">
                        <label>Full Name</label>
                        <input type="text" name="name">
                    </div>
                    
                    <div class="form-textbox">
                        <label>Phone Number</label>
                        <input type="number" name="phn">
                    </div>
                    
                  
					
                    <div class="form-textbox">
                        <input type="submit" name="submit" class="submit" value="Register">
                    </div>
                </form>
                
					<?php
					if(isset($_POST['submit'])){
						$name=$_POST['name'];
						$email=$_POST['email'];
						
						$password=$_POST['pass'];
						$phone=$_POST['phn'];
						$sql="INSERT INTO registration(who,name,email,pass,phn) VALUE('Student','$name','$email','$password','$phone')";
						$res=mysqli_query($con,$sql)or die(mysqli_error($con));
						if($res==1){
							echo "successfully registered";
						//header('location:login_student_teacher.php?msg=registered succesfully');
						}else{
							echo "failed to sign up";
						//header('location:sign_up.php?msg=unsuccessfull');
						}
						}
						
					?>
                    
                <p class="signuphere">
                    Are you a Teacher ? <a href="sign_up_teacher.php" class="signuphere-link"> Sign Up for Teachers</a>
                </p>
            </div>
        
			</div>
    </div>

    <!-- JS -->
    <script src="vendor\jquery\jquery.min.js"></script>
    <script src="js\main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>