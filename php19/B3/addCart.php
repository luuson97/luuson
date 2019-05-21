<?php 
	session_start();
	include_once('data.php');
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		$_SESSION['cart'][$MaSP]['SoLuong']++;
		setcookie('msg', 'Đã thêm sản phẩm vào Giỏ!', time() + 3);
	}else{
		$product = $products[$MaSP];
		$product['SoLuong'] = '1';
		$_SESSION['cart'][$MaSP]=$product;
	}
	header('Location: list_product.php');
?>