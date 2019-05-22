<?php 
  session_start();
  $full_name = $_POST['full_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $address = $_POST['add'];
  if (isset($full_name) &&isset($phone)&& isset($email) && isset($gender) && isset($address)) { 
    $info = array(
     'full_name'  => $full_name,
     'phone'      => $phone,
     'email'      => $email,
     'gender'     => $gender,
     'address'    => $address,
   );
    $_SESSION['info']= $info;



     //cấu hình thông tin do google cung cấp
    $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
    $site_key    = '6LfbbKQUAAAAAJQS7aISzybCXrAWvfZKg_Z_bLLA';
    $secret_key  = '6LfbbKQUAAAAAJRkvCgUa0PfC03Xfykzyv9qgnTQ';             
    //kiem tra submit form
    if(isset($_POST['submit']))
    {
        $check = false;
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
            setcookie("add_msg",'Captcha khong dung',time()+3);
            header('Location: info.php');
        }
        if($response->success == true)
        {
            $check = true;
            header('Location: sendemail.php');
        }else{
            setcookie("add_msg",'Captcha khong dung',time()+3);
            header('Location: info.php');
        }
        
    }
  }else {
    
    setcookie('add_msg','Thông tin nhập chưa đủ!!', time()+3);
    header('Location: info.php');
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

</body>
</html>