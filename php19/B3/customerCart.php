<?php
// session_start();
include_once("CT.php");
// session_destroy();
if (isset($_SESSION['cart'])) {
	$products = $_SESSION['cart'];
}else $products = '';
$unset = "";

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
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="content">
		<h1 style="text-align: center;">GIỎ HÀNG</h1>
		
		<table class="table" style="margin: 0 auto;width: 80%;">
			<thread>
				<th>STT</th>
				<th>Mã SP</th>
				<th>Tên SP</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Thành tiền</th>
				
			
			</thread>
			<tbody>
				<?php 
				$i = 0;
				$Tong = 0;
				if ($products!='') {
				
				foreach ($products as $key => $product) {
					$i++;
					$Tong = $Tong + $product['Gia']*$product['SoLuong'];
					?>
					<tr>
						<td>&nbsp;</td>
						<td><?php echo $i; ?></td>
						<td><?php echo $product['MaSP']; ?></td>
						<td><?php echo $product['TenSP']; ?></td>
						<td><?php echo $product['SoLuong']; ?></td>
						<td ><?php echo number_format($product['Gia']) ?></td>
						<td ><?php echo number_format($product['Gia']*$product['SoLuong']) ?></td>
				<?php } }?>
					<tr>
						<th colspan="6" style="text-align:left;">Tổng</th>
						<th colspan="1"style="text-align:center;"><?php echo $Tong; ?></th>
					</tr>
					<tr>
						<th colspan="6"style="text-align:left;">Bằng chữ</th>
						<th colspan="1"style="text-align:center;color: red"><i><?php echo convert_number_to_words($Tong); ?></i></th>
					</tr>
				
			</tbody>
		</table>
	</center>
	
</div>
</body>
</html>