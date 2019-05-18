<?php 

	session_start();
	// session_destroy(); ///xóa tất cả
	unset($_SESSION['isLogin']);
	header('Location: login.php');
 ?>