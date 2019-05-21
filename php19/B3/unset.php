<?php
session_start();
$MaSP = $_GET['MaSP'];
unset($_SESSION['cart'][$MaSP]);
unset($_SESSION['cart']['']);
setcookie('msg', 'Đã xóa sản phẩm khỏi Giỏ Hàng!', time() + 3);
header('Location: cart.php');
?>
