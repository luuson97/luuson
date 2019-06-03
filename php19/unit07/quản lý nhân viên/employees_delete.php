<?php 
require_once('connection.php');
// import swal from 'sweetalert';





$id =$_GET['id'];

$sql = "DELETE FROM employees WHERE id=$id";

	// Thực hiện câu truy vấn
if (mysqli_query($conn, $sql)) {
	    // echo "Xóa thành công";
	setcookie('add_msg','Nhân viên đã được xóa khỏi database!!',time()+3);
	header('Location: employees.php');
} else {
	echo "Xóa thất bại: " . mysqli_error($conn);
}

	// ngắt kết nối
mysqli_close($conn); 


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<script >swal({
		title: "Are you sure?",
		text: "Once deleted, you will not be able to recover this imaginary file!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			swal("Poof! Your imaginary file has been deleted!", {
				icon: "success",
				
			});
		} else {
			swal("Your imaginary file is safe!");
		}
	});</script>

</body>
</html>