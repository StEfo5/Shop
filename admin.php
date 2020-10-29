<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.btn-blue{
			background: #5fcee7
		}
		.btn-blue:hover{
			background: #68e1fd;
		}
		.a {
			color: black;
		}
		.a:hover {
			text-decoration: none;
			color: #006D86;
		}
		.b {
			position: absolute;
		}
		.img{
			height: 420px;
		}
		.p {
			height: 50px;
		}
	</style>
</head>
<body>
	<div class="bg-light">
		<div class="col-9 mx-auto">
			<div class="row ">
				<div class="mr-auto col-1">
					<div class="row">
						<img src="img/snow.png" class="w-100">
					</div>
				</div>
				<a href="" class="my-auto a">Корзина</a>
				<a href="" class="my-auto a ml-4">Любимые</a>
				<a href="" class="my-auto a ml-4">Популярные</a>
				<form action="index.php" class="ml-4 my-auto ">
					<button class="btn btn-blue text-white">
						Главная страница
					</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-7 ml-3 bg-white mx-auto">
		<form  action="insert.php" method="GET">
			<h6 class="mt-3">
				Название:
			</h6>
			<input class="form-control"  name="name">
				
			</input>
			<h6 class="mt-3">
				Описание:
			</h6>
			<textarea class="form-control" name="description" style="height: 144px">
						
			</textarea>
			<h6 class="mt-3">
				Цена:
			</h6>
			<input class="form-control" name="price">
				
			</input>
			<h6 class="mt-3">
				Картинка:
			</h6>
			<input class="form-control" name="img">
				
			</input>
			<button class="btn text-white mt-4 btn-blue">
				Сохранить
			</button>
		</form>
	</div>
</body>
</html>