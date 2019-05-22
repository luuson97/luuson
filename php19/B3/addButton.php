<?php 
	session_start();
	include_once('data.php');
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		$_SESSION['cart'][$MaSP]['SoLuong']++;
		setcookie('msg', 'Đã thêm sản phẩm vào Giỏ!', time() + 3);
	}
	header('Location: cart.php');
?>