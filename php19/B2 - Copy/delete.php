<?php 

	session_start();
	// session_destroy();
	$code = $_GET['code'];
	$i=0;
 	
 	foreach ($_SESSION['info'] as $key =>$value) {

 		if ($code==$value['code']) {
		unset($_SESSION['info'][$i]);
		setcookie('msg', 'Xóa thành công !', time() + 3);	
		$i++;
 	}
		
	
	
 	
	header('Location: list.php');

?>