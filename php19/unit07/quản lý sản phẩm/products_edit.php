<?php  
    session_start();
    require_once('connection.php');
    $_SESSION['id']=$_GET['id'];
    // echo $_GET['id'];
    $query = "SELECT * FROM products WHERE id=".$_GET['id']."";
    // thuc thi cau lenh
    $result = $conn->query($query);
    //taoj mangr dder chuaw
    // $employees = array();
    $row = $result->fetch_assoc();
    // var_dump($row);
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
        <form action="products_edit_process.php" method="POST"  role="form" enctype="multipart/form-data">
            <legend style="text-align: center;padding-top: 30px;">EDIT PRODUCTS</legend>         
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
                <input type="text" class="form-control" id="" placeholder="Nhập vào tên sản phẩm" name="name" value="<?php echo $row['name'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Số Lượng</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số lượng sản phẩm" name="quantity" value="<?php echo $row['quantity'] ?>">
            </div>  
            <div class="form-group" >
                <label for="">Gía Bán</label>  
                <input type="text"class="form-control"  placeholder="Nhập vào giá bán" id="" name="price" value="<?php echo $row['price'] ?>"> 
                
            </div>  
            <div class="form-group">
                <label for="">Category_id</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào category_id" name="category_id" value="<?php echo $row['category_id'] ?>">
            </div>  
            <div class="form-group">
                <label for="">images</label>
                <input type="file" class="form-control" id="" placeholder="Upload Image" name="image" >
                <img src="employees_images/<?= $row['image'] ?>" alt="" width="60px" height="80px">
            </div>  
            
            
            <input type="submit" value="ADD" name="submit"class="btn btn-primary">
            <a href="products.php"class="btn btn-danger">Danh sách sản phẩm</a>
        </form>
    </div>
</body>
</html>



