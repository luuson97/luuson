<?php 

	session_start();
	if (isset($_SESSION['info'])) {
		$data_arr = $_SESSION['info'];
	}else{
		$data_arr = array();
	}
	// echo "<pre>";
	// 	print_r($_SESSION['info']);
	// echo "</pre>";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css" media="screen">
    	th {
    		text-align: center;
    	}
    	td {
    		text-align: center;
    	}
    </style>
 </head>
 <body>
 	<div class="container">
 		<h2 align="center">DANH SÁCH NGƯƠI DÙNG</h2>
 		<a href="add.php" class="btn btn-primary">New</a>
 		<?php 
 			if (isset($_COOKIE['msg'])) {
 		 ?>	
 		 	<div class="alert alert-success">
 		 		<strong>Thông báo</strong> <?php  echo $_COOKIE['msg']; ?>
 		 		
 		 	</div>
 		 <?php } ?>
 		 <table class="table">
 		 	<thead>
 		 		<tr>
 		 			<th>#</th>
 		 			<th>Mã sinh viên</th>
 		 			<th>Họ và tên</th>
 		 			<th>Số điện thoại</th>
 		 			<th>Action</th>
 		 		</tr>
 		 	</thead>
 		 	<tbody>
 		 		<?php 
 		 		$i=0;
 		 		foreach ($data_arr as $key =>$value) {
 		 			$i++; 
 		 		 ?>	
 		 		<tr>
 		 			<td><?php echo $i; ?></td>
 		 			<td><?php echo $value['code']; ?></td>
 		 			<td><?php echo $value['full_name']; ?></td>
 		 			<td><?php echo $value['phone']; ?></td>
 		 			<td>
 		 				<a href="detail.php?code=<?php echo $value['code']; ?>" class="btn btn-success">Detial</a>
 		 				<a href="delete.php?code=<?php echo $value['code']; ?>" class="btn btn-danger">Delete</a>
 		 			</td>
 		 		</tr>
 		 		
 		 	<?php } ?>
 		 	</tbody>
 		 </table>
 	</div>				
 </body>
 </html>