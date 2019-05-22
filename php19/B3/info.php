

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
        <form action="checkInfo.php" method="POST"  role="form">
            <legend style="text-align: center;padding-top: 30px;"> THÔNG TIN KHÁCH HÀNG!!</legend>         
            <div class="form-group">
                <p style="color: red;"><?php 
                    if (isset($_COOKIE['add_msg']))
                    {
                       echo $_COOKIE['add_msg'];
                    }

                ?></p>  
                <label for="">Họ và Tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="full_name" >
            </div>  
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone" >
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email" >
            </div>  
            <div class="form-group" >
                <label for="">Giới Tính</label>   <br>
                <input type="radio" value="Nam"  id="" name="gender">Male 
                <input type="radio" value="Nữ"  id="" name="gender">Female 
                <input type="radio" value="Other"  id="" name="gender">Other
            </div>  
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="add" >
            </div>  
            
            <div class="g-recaptcha" data-sitekey="<?php echo '6LfbbKQUAAAAAJQS7aISzybCXrAWvfZKg_Z_bLLA'?>"></div>
            <input type="submit" value="Buy" name="submit"class="btn btn-primary">
            <a href="cart.php"class="btn btn-danger">Giỏ Hàng</a>
        </form>
    </div>
</body>
</html>




