<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '','shop');
	$q = mysqli_query($con, "SELECT * FROM products");
 ?>
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
				<form action="admin.php" class="ml-4 my-auto ">
					<button class="btn btn-blue text-white">
						Админ панель
					</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-9 mx-auto">
		<div style="height: 500px;">
			<img src="img/mathematics.png" class="b w-25" style="left: 800px;">
			<img src="img/coding.png" class="b w-25" style="left: 540px; top: 252px;">
			<img src="img/swimming.png" class="b w-25" style="left: 260px; top: 264px;">
			<div class="b" style="left: 80px; top: 60px">
				<h1 style="font-size: 80px; ">От души, братан</h1>
			</div>
			

		</div>
		<div class="row">
			<div class="col-4">
				<div class="text-center border h-100">
					<div class="img">
					<?php 
						$str1 = $q->fetch_assoc();
						echo '<img class="w-50" src="'.$str1['img'].'">';
					 ?>
					</div>
					 <h5>
					 	<?php 
					 		echo $str1['name'];
					 	 ?>
					 </h5>
					 <p>
					 	<?php 
					 		echo $str1['description'];
					 	 ?>
					 </p>
					 <p>
					 	<?php 
					 		echo $str1['price'];
					 	 ?>
					 </p>
				</div>
			</div>
			<!--second-->
			<div class="col-4">
				<div class=" text-center border h-100">
					<div class="img">
					<?php 
						$str2 = $q->fetch_assoc();
						echo '<img class="w-75" style="margin-top: 120px;" src="'.$str2['img'].'">'
					 ?>
					</div>
					 <h5 style="">
					 	<?php 
					 		echo $str2['name'];
					 	 ?>
					 </h5>
					 <p>
					 	<?php 
					 		echo $str2['description'];
					 	 ?>
					 </p>
					 <p>
					 	<?php 
					 		echo $str2['price'];
					 	 ?>
					 </p>
				</div>
			</div>
			<!--third-->
			<div class="col-4">
				<div class=" text-center border h-100">
					<div class="img">
					<?php 
						$str3 = $q->fetch_assoc();
						echo '<img class="w-50" style="margin-top: 60px;" src="'.$str3['img'].'">'
					 ?>
					</div>
					 <h5 style="">
					 	<?php 
					 		echo $str3['name'];
					 	 ?>
					 </h5>
					 <p>
					 	<?php 
					 		echo $str3['description'];
					 	 ?>
					 </p>
					 <p>
					 	<?php 
					 		echo $str3['price'];
					 	 ?>
					 </p>
				</div>
			</div>
		</div>	
		<div class="row mt-3 pb-4">
			<!--fourth-->	
			<div class="col-4">
				<div class=" text-center border h-100">
					<div class="img">
					<?php 
						$str4 = $q->fetch_assoc();
						echo '<img class="w-50" style="margin-top: 64px;" src="'.$str4['img'].'">'
					 ?>
					</div>
					 <h5 style="">
					 	<?php 
					 		echo $str4['name'];
					 	 ?>
					 </h5>
					 <p>
					 	<?php 
					 		echo $str4['description'];
					 	 ?>
					 </p>
					 <p>
					 	<?php 
					 		echo $str4['price'];
					 	 ?>
					 </p>
				</div>
			</div>
			<!--fifth-->
			<div class="col-4">
				<div class=" text-center border h-100">
					<div class="img">
					<?php 
						$str5 = $q->fetch_assoc();
						echo '<img class="w-75" style="margin-top: 100px;" src="'.$str5['img'].'">'
					 ?>
					</div>
					 <h5 style="">
					 	<?php 
					 		echo $str5['name'];
					 	 ?>
					 </h5>
					 <p>
					 	<?php 
					 		echo $str5['description'];
					 	 ?>
					 </p>
					 <p>
					 	<?php 
					 		echo $str5['price'];
					 	 ?>
					 </p>
				</div>
			</div>
			<!--sixth-->
			<div class="col-4">
				<div class=" text-center border h-100">
					<div class="img">
					<?php 
						$str6 = $q->fetch_assoc();
						echo '<img class="w-75" style="margin-top: 70px;" src="'.$str6['img'].'">'
					 ?>
					</div>
					 <h5 style="">
					 	<?php 
					 		echo $str6['name'];
					 	 ?>
					 </h5>
					 <p>
					 	<?php 
					 		echo $str6['description'];
					 	 ?>
					 </p>
					 <p>
					 	<?php 
					 		echo $str6['price'];
					 	 ?>
					 </p>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>