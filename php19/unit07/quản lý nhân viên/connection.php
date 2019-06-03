<?php 

// Thong so ket noi CSDL
	
	$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

	$username = "root";   // Tên đăng nhập
		
	$password = "";    // Mật khẩu truy cập
		
	$dbname = "quanlynhanvien1";   // Tên cơ sở dữ liệu muốn kết nối đến

		
	// Tạo kết nối đến CSDL
		
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8"); 
	if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
?>