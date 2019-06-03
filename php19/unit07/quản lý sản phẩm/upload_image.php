<?php 


	function upload_image(){
		if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
	        
	        $target_dir = "products_images/";  // thư mục chứa file upload

	        $target_file = $target_dir . basename($_FILES["image"]["name"]); // link sẽ upload file lên
	        
	        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	            return basename( $_FILES["image"]["name"]);
	        } else { // Upload file có lỗi 
	            return false;
	        }
	    }
	}

 ?>

