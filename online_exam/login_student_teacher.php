<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="css\material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

    <div class="main">

        
        <div class="container">
           
            <div class="sign-up-content">
                <form method="POST" name="frm" action="login_code.php" class="signup-form">
                     <h2>Sign In</h2>
                    <h2 class="form-title">What type of user are you ?</h2>
                    <div class="form-radio">
                    
                        <input type="radio" name="who" value="Student" id="student" checked="checked" >
                        <label for="student">Student</label>

                       

                        <input type="radio" name="who" value="Teacher" id="teacher">
                        <label for="teacher">Teacher</label>
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
                        <input type="submit" name="submit" class="submit" value="login">
                    </div>
                </form>
                
					<?php
					if(isset($_GET['msg'])){
						echo $_GET['msg'];}
						
					?>
                    
                <p class="signuphere">
                    New User ?<a href="sign_up.php" class="signuphere-link"> Sign Up</a>
                </p>
            </div>
        
			</div>
    </div>

    <!-- JS -->
    <script src="vendor\jquery\jquery.min.js"></script>
    <script src="js\main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>