<?php
	$id = $_GET['test_id'];
	$noq = $_GET['noq'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Examination</title>
<script>
	window.location.hash="no-back-button";
	window.location.hash="Again-No-back-button";
	window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<body>
	<h3> Submit questions here </h3>
	<hr>
	<form action="questions_db.php" method="post" >
		Test id : <br>
		<input type="text" name="id" value="
		<?php
			echo $id;
		?>" readonly >
		<br><br>
		Number of questions left : <br>
		<input type="text" name="noq" value="
		<?php
			echo $noq;
		?>" readonly >
		<br/>
		Question :<br/>
		<textarea rows = "5" cols = "50" name = "question" placeholder="Type your question here" ></textarea>
		<br>
		Add a diagram :<br/> 
		<input type="file" name="image"> 
		<br>
		Marks : <br/>
		<input type="number" name="marks" placeholder="marks for this question" >
		<div>Put your options here:<br>
							<ol>
								<li><input type="text" name="option1" placeholder="1st option"></li>
								<li><input type="text" name="option2" placeholder="2nd option"></li>
								<li><input type="text" name="option3" placeholder="3rd option"></li>
								<li><input type="text" name="option4" placeholder="4th option"></li>
							</ol></div>
		Answer : <br/>
		<input type="number" name="answer" placeholder="right option for this question" >
		<input type="submit" value="Submit" name="submit" >
	</form>
</body>
</html>   