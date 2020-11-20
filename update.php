<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	$upd = mysqli_query($con, "UPDATE projects SET title='{$_GET['title']}', description='{$_GET['description']}', goal='{$_GET['goal']}', img='{$_GET['img']}' WHERE id='{$_GET['id']}'");
	mysqli_query($con, $upd);
	header('Location: account.php');
?>

