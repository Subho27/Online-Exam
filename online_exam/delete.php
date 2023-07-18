<?php
require("connection.php");
?>
<?php
$pass=$_SESSION['u_info']['pass'];
$src="DELETE FROM registration WHERE pass='$pass'";
$rs=mysqli_query($con,$src)or die(mysqli_error($con));
if($rs==1)
{
	header('location:login_student_teacher.php?msg=WE WILL MISS YOU');
}
else
{
	header('location:my_profile_student.php?msg=SORRY DELETE UNSUCCESSFULL');
}
?>