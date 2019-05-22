<?php 
	session_start();
	include_once('email.php');
	include_once('data.php');

	$email_recive=$_SESSION['info']['email'];
	$name=$_SESSION['info']['full_name'];
	
	ob_start();
	include_once('customerCart.php');
	$contents=ob_get_contents();
	ob_clean();

	$subject='Mua Hàng Tại Zent PHP 19';
	echo $email_recive;
	send_email($email_recive,$name,$contents,$subject);
	header('Location: buy.php');
	session_destroy();
 ?>
