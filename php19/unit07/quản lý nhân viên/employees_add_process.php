<?php 

	require_once('connection.php');
	require_once ('upload_image.php');
	// $data = $_POST;
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	$image= upload_image();

	// echo $image;

	
	if (($name!='') && ($email!='') && ($mobile!='') && ($address!='') && ($password!='') ) {

		if ($image!==false) {
			$query = "INSERT INTO employees(name, email, mobile, address, password, image)
				VALUES ('$name', '$email', '$mobile', '$address', '$password','$image');";
			if (mysqli_query($conn, $query)) {
		      	setcookie('add_msg','Nhân viên đã được thêm vào database!!',time()+3);
		      	header('Location: employees_add.php');
			} 
		}else {
			setcookie('add_msg','ERROR Image.Kiểm tra lại Image!!',time()+3);
		header('Location: employees_add.php');
		    
		}
		mysqli_close($conn);
	}else {
		setcookie('add_msg','Thông tin nhập chưa đủ!!',time()+3);
		    header('Location: employees_add.php');
	}
	
	
	
 ?>
