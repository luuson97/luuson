<?php 
	session_start();
	if ($_SESSION['isLogin'] == false) {
		setcookie('login_msg','Thông tin chưa đủ!' ,time()+2);
		header('Location: add.php');
	}else {
		echo "- Mã sinh viên: ".$_SESSION['data'][0]."<br>";
		echo "- Họ và tên:    ".$_SESSION['data'][1]."<br>";
		echo "- Số điện thoại: ".$_SESSION['data'][2]."<br>";
		echo "- Email: ".$_SESSION['data'][3]."<br>";
		echo "- Giới tính: ".$_SESSION['data'][4]."<br>";
		echo "- Địa chỉ: ".$_SESSION['data'][5]."<br>";	
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="add.php">logout</a>
 </body>
 </html>