<?php 

	require_once('connection.php');
	require_once ('upload_image.php');
	session_start();
	$id = $_SESSION['id'];
	// echo $id;
	$query = "SELECT * FROM employees WHERE id=$id";
	//thuc thi cau lenh
	$result = $conn->query($query);
	//taoj mangr dder chuaw
	// $employees = array();
	$row = $result->fetch_assoc();
	// $employees[] = $row;
	
	// echo "<pre>";
	// 	print_r($row);
	// echo "</pre>";
	$_POST['name']?$name=$_POST['name']:$name=$row['name'];
	$_POST['email']?$email=$_POST['email']:$email=$row['email'];
	$_POST['mobile']?$mobile=$_POST['mobile']:$mobile=$row['mobile'];
	$_POST['address']?$address=$_POST['address']:$address=$row['address'];
	$_POST['password']?$password=$_POST['password']:$password=$row['password'];
	// $_POST['image']?$image=$_POST['image']:$image=$row['image'];
	$image= upload_image();
	$image===false?$image=$row['image']:$image;
	
	// Thực hiện update
	$sql = "UPDATE employees SET name='$name', email= '$email', mobile= '$mobile', address= '$address', password= '$password', image='$image' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
	    setcookie('add_msg','Nhân viên đã được update!!',time()+3);
      	header('Location: employees_add.php');
	} else {
	    echo "Update thất bại: " . mysqli_error($conn);
	}
	 
	// ngắt kết nối
	mysqli_close($conn);

 ?>