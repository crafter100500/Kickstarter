<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$query = mysqli_query($connect, "SELECT * FROM projects WHERE id='{$_GET['id']}'");

	$result = $query->fetch_assoc();
	
	$donated = $result["donated"];
	$donated = $donated + 10;

	$upd = mysqli_query($connect, "UPDATE projects SET donated='". $donated ."' WHERE id='". $_GET['id'] ."' ");

	header('Location: index.php');
?>