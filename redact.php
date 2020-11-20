<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php  
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
		$query = mysqli_query($connect, "SELECT * FROM projects");
		$result = $query->fetch_assoc();
	?>
	<div style="" class="">
		<form action="update.php" method="GET">
			<input type="" style="display: none;" name="id" placeholder="ID" class=" border rounded text-center border-secondary" value=<?php echo $result['id']?>>
			<input type="" name="title" placeholder="Title" class=" border rounded text-center border-secondary" value=<?php echo $result['title']?>>
			<input type="" name="description" placeholder="Title" class=" border rounded text-center border-secondary" value=<?php echo $result['description']?>>
			<input type="" name="goal" placeholder="Goal" class=" border rounded text-center border-secondary" value=<?php echo $result['goal']?>>
			<input type="" name="img" placeholder="Img" class=" border rounded text-center border-secondary" value=<?php echo $result['img']?>>
			<button class="btn-primary btn mt-1">Обновить</button>
		</form>
	</div>
</body>
</html>