<?php
session_start();
$MaSP = $_GET['MaSP'];
$_SESSION['cart'][$MaSP]['SoLuong']--;
if ($_SESSION['cart'][$MaSP]['SoLuong'] == 0) {
	unset($_SESSION['cart'][$MaSP]);
	setcookie('msg', 'Đã xóa sản phẩm khỏi Giỏ Hàng!', time() + 3);
}

header('Location: cart.php');
?>