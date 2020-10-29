<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '','shop');
	mysqli_query($con, "INSERT INTO products (name, description, price, img) VALUES ('{$_GET['name']}', '{$_GET['description']}', '{$_GET['price']}', '{$_GET['img']}')");
	header('Location: index.php');
 ?>