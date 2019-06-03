
<?php 
require_once('connection.php');

	 // Cau lenh truy van co so du lieu

$query = "SELECT * FROM employees";
	//thuc thi cau lenh
$result = $conn->query($query);
	//taoj mangr dder chuaw
$employees = array();
while($row = $result->fetch_assoc()) { 
	$employees[] = $row;
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
		<a href="employees_add.php" class="btn btn-primary">New</a>
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
				<th>Tên nhân viên</th>
				<th>email</th>
				<th>moblie</th>
				<th>address</th>
				<th>password</th>
				<th>image</th>
				<th>Action</th>

			</thread>
			<tbody>
				<?php 
				$i = 0;
				foreach ($employees as $key => $product) {
					$i++;
					?>
					<tr id="<?php echo $product['id'] ?>">

						<td><?php echo $product['id']; ?></td>
						<td><?php echo $product['name']; ?></td>
						<td><?php echo $product['email']; ?></td>
						<td><?php echo $product['mobile']; ?></td>
						<td><?php echo $product['address']; ?></td>
						<td><?php echo $product['password']; ?></td>
						<td><img src="employees_images/<?= $product['image'] ?>" alt="" width="40p" height="50px">&nbsp;</td>
						<td>
							<a href="employees_detail.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Detail</a>
							<a href="employees_delete.php?id=<?php echo $product['id']; ?>" class="btn btn-success btn-delete" data-id="<?php echo $product['id'] ?>">Delete</a>
							<a href="employees_edit.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Edit</a>
							<!-- <a href="products_add.php" class="btn btn-success">Thêm sản phẩm</a> -->
						</td>
						

					</tr>
				<?php } ?>
			</tbody>
		</table>
	<!-- <a href="products.php" class="btn btn-danger" style="margin-left:35%;">Tiếp tục mua hàng</a>
		<a href="checkGioHang.php?MaSP=<?php  echo isset($product['MaSP'])?$product['MaSP']:''; ?>" class="btn btn-danger" style="margin-left: ">Buy</a> -->
	</div>
	<script>
		$('.btn-delete').on('click',function(event){

			event.preventDefault();
				// alert('sadkjas');
				var href= $(this).attr('href');
				var id = $(this).data('id');
				swal({
					title: "Are you sure?",
					text: "Once deleted, you will not be able to recover this imaginary file!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$.ajax({
							type:'get',
							url:href,
							success : function(reponese){
								$('#'+id).remove()
							}
						})
						swal("Poof! Your imaginary file has been deleted!", {
							icon: "success",
						});
					} else {
						swal("Your imaginary file is safe!");
					}
				});

			})
		</script>
	</body>
	</html>