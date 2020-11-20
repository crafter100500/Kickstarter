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
		$query = mysqli_query($connect, "SELECT * FROM projects WHERE user ='Joeming Dunn'");
	?>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<a href="index.php"><img src="img/logo.png" class="w-25"></a>
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="img/lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<form action="admin.php" method="GET">
		<div class="text-center" style="padding-top: 30px;">
			<input name="title" class="form-control mx-auto" placeholder="Название товара" style="width: 500px;">
			<input name="description" class="form-control mx-auto" placeholder="Описание товара"  style="width: 500px; height: 200px; ; margin-top: 20px;">
			<input name="goal" class="form-control mx-auto" placeholder="Цена товара"  style="width: 500px;margin-top: 20px;">
			<input name="donated" class="form-control mx-auto" placeholder="Собрано"  style="width: 500px;margin-top: 20px;">
			<input name="img" class="form-control mx-auto" placeholder="Картинка"  style="width: 500px;margin-top: 20px;">
			<input name="user" class="form-control mx-auto" placeholder="User"  style="width: 500px;margin-top: 20px;">
			<input name="place" class="form-control mx-auto" placeholder="Город"  style="width: 500px;margin-top: 20px;">
			<button class="btn btn-success" style=" margin-top: 20px;">Добавить</button>
		</div>
	</form>
	<h4>My projects</h4>
	
	<p></p>
	<div class="row mt-5">
		<?php  
			for($i=0;$i<mysqli_num_rows($query);$i++){ 
				$result = $query->fetch_assoc();
		?>
		<div class="col-4">
			<div class="col-12">
				<div style="height:300px; background-image:url(<?php echo $result['img'] ?>); background-size: cover; background-position:center; border-radius: 5px;"></div>
				<h4><?php echo $result['title'] ?></h1>
				<p><?php echo $result['description'] ?></p>
				<p><?php echo $result['user']; echo ', '; echo $result['place'] ?></p>
				<p><?php echo $result['goal']; echo "$ goal"; ?></p>
				<p class="text-success"><?php echo $result['donated']; echo "$ pledged"; ?></p>
				<form action="redact.php" method="GET">
					<button class="btn btn-primary">Редактировать</button>
				</form>
				<form action="delete.php" method="GET">
			 		<input style="display: none;" value="<?php echo $result["id"];?>" name="id">
			 		<button class="btn btn-danger mt-1">Удалить</button>
			 	</form>	
			</div>
			
		</div>
		<?php } ?>
	</div>
</div>
</body>
</html>