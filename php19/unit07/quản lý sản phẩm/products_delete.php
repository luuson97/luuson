<?php 
	require_once('connection.php');
	$id =$_GET['id'];

	$sql = "DELETE FROM products WHERE id=$id";
 
	// Thực hiện câu truy vấn
	if (mysqli_query($conn, $sql)) {
	    // echo "Xóa thành công";
	    setcookie('add_msg','Sản phẩm đã được xóa khỏi database!!',time()+3);
	    header('Location: products.php');
	} else {
	    echo "Xóa thất bại: " . mysqli_error($conn);
	}
	 
	// ngắt kết nối
	mysqli_close($conn);
 ?>