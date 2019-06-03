<?php  

	require_once('connection.php');


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
    <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<body>
    <div class="container">
        <form action="products_add_process.php" method="POST"  role="form" enctype="multipart/form-data">
            <legend style="text-align: center;padding-top: 30px;">ADD PRODUCTS</legend>         
            <div class="form-group">
                <p style="color: red;"><?php 
                    if (isset($_COOKIE['add_msg']))
                    {
                       echo $_COOKIE['add_msg'];
                    }

                ?></p>  
                
            </div>  
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" >
            </div>  
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số lượng sản phẩm" name="quantity" >
            </div>  
            <div class="form-group" >
                <label for="">Gía Bán</label>  
                <input type="text"class="form-control" value="" placeholder="Nhập vào giá bán" id="" name="price"> 
                
            </div>  
            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào category_id" name="category_id" >
            </div>  
            <div class="form-group">
                <label for="">images</label>
                <input type="file" class="form-control" id="" placeholder="Upload Image" name="image" >
            </div>  
            
            
            <input type="submit" value="ADD" name="submit"class="btn btn-primary">
            <a href="products.php"class="btn btn-danger">Danh sách sản phẩm</a>
        </form>
    </div>
</body>
</html>



