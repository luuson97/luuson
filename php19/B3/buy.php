<?php 
	session_start();
	include_once('email.php');
	include_once('data.php');
	if (isset($_SESSION['cart'])) {
		$products = $_SESSION['cart'];
	}else $products = '';
	// echo "<pre>";
 //    	print_r($products);
	// echo "</pre>";
	$i = 12;
	$Tong=1;
	$email_recive=$_SESSION['info']['email'];
	$name=$_SESSION['info']['full_name'];
	// $name='Lưu Hồng Sơn';
	ob_start();
	include_once('customerCart.php');
	$contents=ob_get_contents();
	ob_clean();
	
	;
	$subject='Mua Hàng Tại Zent PHP 19';
	// echo $email_recive;
	send_email($email_recive,$name,$contents,$subject);
	// header('Location: customerCart.php');
	session_destroy();
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
 </head>
 <body>
 	<h1 align="center">Bạn đã mua hàng thành công!!</h1>
 	<a href="list_product.php" class="btn btn-danger" style="margin-left:44%;margin-top: 20px;">Tiếp tục mua hàng</a>

 </body>
 </html>