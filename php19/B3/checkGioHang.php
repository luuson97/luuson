<?php 
	session_start();
	$_GET['MaSP']?$check=$_GET['MaSP']:$check="";
	// echo $check;
	// $check="";
	if ($check!="") {
		header('Location: info.php');
	}else{
		echo '<h1 style="margin-left:28%;">Không có sản phẩn nào trong Giỏ Hàng!!</h1>';
		echo '<a href="list_product.php" class="btn btn-danger" style="margin-left:45%;">Tiếp tục mua hàng</a>';
	}
	echo $check;
	
 ?>
  <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css" media="screen">
		h1{
			color: orange;
		}
	</style>
 </head>
 <body>
 	

 </body>
 </html>