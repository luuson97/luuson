<?php 
session_start();
if (isset($_SESSION['isLogin'])&&$_SESSION['isLogin']==true) {
    header('Location: delete.php');
}
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
        <form action="checkInfo.php" method="POST" role="form">
            <legend style="text-align: center;padding-top: 30px;"> Lưu thông tin sinh viên vào session!</legend>
            
            
            <div class="form-group">
                <p style="color: red;"><?php 
                    if (isset($_COOKIE['add_msg']))
                    {
                       echo $_COOKIE['add_msg'];
                    }

                ?></p>  
                <label for="">Họ và Tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="full_name">
            </div>  
            <div class="form-group">
                <label for="">Số Điện Thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div>  
            <div class="form-group">
                <label for="">Giới Tính</label>   <br>
                <input type="radio" value="Nam"  id="" name="gender">Male 
                <input type="radio" value="Nữ"  id="" name="gender">Female 
                <input type="radio" value="Other"  id="" name="gender">Other
            </div>  
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="add">
            </div>  
            <?php
                //cấu hình thông tin do google cung cấp
                $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
                $site_key    = '6LfbbKQUAAAAAJQS7aISzybCXrAWvfZKg_Z_bLLA';
                $secret_key  = '6LfbbKQUAAAAAJRkvCgUa0PfC03Xfykzyv9qgnTQ';
                  
                //kiem tra submit form
                if(isset($_POST['submit']))
                {
                    //lấy dữ liệu được post lên
                    $site_key_post    = $_POST['g-recaptcha-response'];
                      
                    //lấy IP của khach
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $remoteip = $_SERVER['REMOTE_ADDR'];
                    }
                     
                    //tạo link kết nối
                    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
                    //lấy kết quả trả về từ google
                    $response = file_get_contents($api_url);
                    //dữ liệu trả về dạng json
                    $response = json_decode($response);
                    $check=false;
                    if(!isset($response->success))
                    {
                        echo 'Captcha khong dung';
                    }
                    if($response->success == true)
                    {
                  
                        
                        header('Location: checkInfo.php');
                    }else{
                        echo 'Captcha khong dung';
                    }
                }
            ?>
            
                <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
                <input type="submit" name="submit" value="Buy" class="btn btn-primary"> 
             
                
            
                <!-- <button type="submit" class="btn btn-primary info">Buy</button> -->
                <a href="cart.php"class="btn btn-danger">Giỏ Hàng</a>
        </form>
    </div>
</body>
</html>




