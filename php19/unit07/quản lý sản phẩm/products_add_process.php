<?php 

	require_once('connection.php');
	require_once ('upload_image.php');
	$data = $_POST;	
	$image= upload_image();
	if (($data['name']!='') && ($data['quantity']!='') && ($data['price']!='') && ($data['category_id']!='') ) {
		if ($image!==false) {
			$query = "INSERT INTO products(name, quantity, price, category_id, image)
			VALUES ('".$data['name']."', ".$data['quantity'].", ".$data['price'].", ".$data['category_id'].", '$image');";
			if (mysqli_query($conn, $query)) {
		      	setcookie('add_msg','Sản phẩm đã được thêm vào database!!',time()+3);
		      	header('Location: products_add.php');
			} 
		}else {
			setcookie('add_msg','ERROR Image.Kiểm tra lại Image!!',time()+3);
			header('Location: products_add.php');
		  
		}
		mysqli_close($conn);
	}else {
		setcookie('add_msg','Thông tin nhập chưa đủ!!',time()+3);
		header('Location: products_add.php');
	}


	
	// echo "<pre>";
	// 	print_r($data);
	// echo "</pre>";
	// echo $image;
 ?>