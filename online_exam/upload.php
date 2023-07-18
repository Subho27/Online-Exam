<?php require("connection.php") ?>
<?php 
echo "<pre>"; 
print_r($_FILES);
?>
<?php
$id = $_POST['id'];
$fname=$_FILES['image']['name'];
$ftype=$_FILES['image']['type'];
$fsize=$_FILES['image']['size'];
$fpath="upload-files/".rand(0000000,9999999)."_".$fname;
if(($ftype=="image/png")||($ftype=="image/jpeg")||($ftype=="image/jpg") && $fsize>1572864){
if(move_uploaded_file($_FILES['image']['tmp_name'],$fpath)){
	$sql="INSERT INTO $id (fpath) VALUES ('$fpath')";
	$res=mysqli_query($con,$sql)or die(mysqli_error($con));
	if($res==1){
		//echo "File Upload sucessfull";
		header('location:ready_a_set.php');
	}else{
		//echo "File Upload not sucessfull";
		header('location:ready_a_set.php?msg=not successfull');
	}
}else{
	header('location:ready_a_set.php?msg=unsucessfull');
}
}else{
	//echo "Upload unsucessfull";
	header('location:ready_a_set?msg=Upload unsucessfull.check your img type or size.');
}
?>
