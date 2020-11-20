<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");

	$ins = "INSERT INTO projects (title, description, goal, donated, img, user, place) VALUES ('".$_GET['title']."', '".$_GET['description']."', '".$_GET['goal']."', '".$_GET['donated']."', '".$_GET['img']."', '".$_GET['user']."' ,'".$_GET['place']."')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
?>