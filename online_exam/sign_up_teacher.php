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
                     
                    <h2 class="form-title">Sign Up for Teachers</h2>
                    
					<div class="form-textbox">
                        <label>Unique code*</label>
                        <input type="password" name="unique">
                    </div>
                   
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
						$unique=$_POST['unique'];
						$password=$_POST['pass'];
						$phone=$_POST['phn'];
						if($unique=="wecareabout_students")
						{
						$sql="INSERT INTO registration(who,name,email,pass,phn) VALUE('Teacher','$name','$email','$password','$phone')";
						$res=mysqli_query($con,$sql)or die(mysqli_error($con));
						if($res==1){
							
						header('location:login_student_teacher.php?msg=registered succesfully');
						}else{
							
						header('location:sign_up_teacher.php?msg=unsuccessfull');
						}
						}else{
							echo "Please Sir,Either Write Down the Correct Codeword Or You have to register as a student.";
							//header('location:sign_up_teacher.php?msg=Please Sir,Either Write Down the Correct Codeword Or You have to register as a student.');
						}
					}
					?>
                    
                <p class="signuphere">
                    Are you a student ? Then go back & <a href="sign_up.php" class="signuphere-link"> Sign Up for Students</a>
                </p>
            </div>
        
			</div>
    </div>

    <!-- JS -->
    <script src="vendor\jquery\jquery.min.js"></script>
    <script src="js\main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>