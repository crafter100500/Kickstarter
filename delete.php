<?php  
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$del = mysqli_query($con, "DELETE FROM projects WHERE id = '{$_GET['id']}'");
	mysqli_query($con, $del);
	header('Location: account.php');
?>