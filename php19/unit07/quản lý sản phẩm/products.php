
<?php 
	require_once('connection.php');

	 // Cau lenh truy van co so du lieu

	$query = "SELECT * FROM products";
	//thuc thi cau lenh
	$result = $conn->query($query);
	//taoj mangr dder chuaw
	$products = array();
	while($row = $result->fetch_assoc()) { 
	       $products[] = $row;
	}
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

		th{
			text-align: center;
		}
		td{
			/*padding-top: 70%;*/
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">DANH SÁCH SẢN PHẨM</h1>
		<a href="products_add.php" class="btn btn-primary">New</a>
		<div class="form-group">
                <p style="color: red;padding-left: 10%;"><?php 
                    if (isset($_COOKIE['add_msg']))
                    {
                       echo $_COOKIE['add_msg'];
                    }

                ?></p>  
                
            </div>  

		<table class="table" style="margin: 0 auto;width: ;">
			<thread>
				
				<th>ID</th>
				<th>Tên SP</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Category_id</th>
				<th>images</th>
				<th>Action</th>

			</thread>
			<tbody>
				<?php 
				$i = 0;
				foreach ($products as $key => $product) {
					$i++;
					?>
					<tr>
					
						<td><?php echo $product['id']; ?></td>
						<td><?php echo $product['name']; ?></td>
						<td><?php echo $product['quantity']; ?></td>
						<td><?php echo $product['price']; ?></td>
						<td><?php echo $product['category_id']; ?></td>
						<td><img src="products_images/<?= $product['image'] ?>" alt="" width="80px" height="50px"></td>
						<td>
							<a href="product_detail.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Detail</a>
							<a href="products_delete.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Delete</a>
							<a href="products_edit.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Edit</a>
							<!-- <a href="products_add.php" class="btn btn-success">Thêm sản phẩm</a> -->
						</td>
						
					
					</tr>
				<?php } ?>
			</tbody>
		</table>
	<!-- <a href="products.php" class="btn btn-danger" style="margin-left:35%;">Tiếp tục mua hàng</a>
	<a href="checkGioHang.php?MaSP=<?php  echo isset($product['MaSP'])?$product['MaSP']:''; ?>" class="btn btn-danger" style="margin-left: ">Buy</a> -->
	</div>
</body>
</html>