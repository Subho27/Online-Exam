<?php
require("connection.php");
?>
<?php
$email=$_POST['email'];
$pwd=$_POST['pass'];
$usertype=$_POST['who'];
$src="select * from registration where email='$email' and pass='$pwd' and who='$usertype'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if(mysqli_num_rows($rs)>0){
	$rec=mysqli_fetch_assoc($rs);
	$_SESSION['u_info']=$rec;
	if($rec['who']=="Teacher"){
		header('location:index1.php?msg=welcome sir');
	
	}
	else{
	header('location:index.php?msg=welcome');
	}

}else{
	header('location:login_student_teacher.php?msg=Invalid email or password');
	
}