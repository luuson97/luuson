<?php 

require_once('connection.php');
$id=$_GET['id'];
$conn->set_charset("urf8");

$query = // Cau lenh truy van co so du lieu
$query = "SELECT * FROM products WHERE id=".$id;
//thuc thi cau lenh
$result = $conn->query($query);
//taoj mangr dder chuaw
$product = $result->fetch_assoc();



// echo "<pre>";
// 	print_r($products);
// echo "</pre>";
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css" media="screen">

		.image{
			width: 30%;
			float: left;

		}
		.contentstyle{
			width: 70%;
			float: right;
			font-size: 20px;
			padding-top: 70px;
		
		}
		.button{
			padding-top: 400px;
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container" style="padding-top: 40px; width: 80%;">
		<div class="image">
			<img src="products_images/<?= $product['image'] ?>" alt="" width="100%" height="100%">
		</div>
		<div class="contentstyle">
			<ul>
				<li><?php echo "Mã Sản Phẩm: ".$product['id']; ?></li>
				<li><?php echo "Tên Sản phẩm: ".$product['name']; ?></li>
				<li><?php echo "Số Lượng: ".$product['quantity']; ?></li>
				<li><?php echo "Gía bán: ".$product['price']; ?></li>
				<li><?php echo "Category_id: ".$product['category_id']; ?></li>
			</ul>	
		</div>
	
	<div class="button">
		<a href="products.php" class="btn btn-danger" style="margin-left: 35%;">Danh sách sản phẩm</a>
		<a href="" class="btn btn-danger" style="margin-left: ">Buy</a>
	</div>
</div>
</body>
</html>