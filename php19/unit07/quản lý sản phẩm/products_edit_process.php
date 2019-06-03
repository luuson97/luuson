<?php 

	require_once('connection.php');
	require_once ('upload_image.php');
	session_start();
	$data = $_POST;
	$id = $_SESSION['id'];

    // echo $_GET['id'];
    $query = "SELECT * FROM products WHERE id=".$id."";
    // thuc thi cau lenh
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
	$image= upload_image();
	$image===false?$image=$row['image']:$image;
	//$query = "SELECT * FROM products";
	$sql = "UPDATE products SET name='".$data['name']."', quantity= ".$data['quantity'].", price= ".$data['price'].", category_id= ".$data['category_id'].", image= '$image' WHERE id=$id";
 
	// Thực hiện update
	if (mysqli_query($conn, $sql)) {
	    setcookie('add_msg','Sản phẩm đã được update!!',time()+3);
      	header('Location: products_add.php');
	} else {
	    echo "Update thất bại: " . mysqli_error($conn);
	}
	 
	// ngắt kết nối
	mysqli_close($conn);

 ?>