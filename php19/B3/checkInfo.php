<?php 
session_start();
$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['add'];
$info=array();
if (isset($full_name) &&isset($phone)&& isset($email) && isset($gender) && isset($address)) {
  
      $info = array(
         'full_name'  => $full_name,
         'phone'      => $phone,
         'email'      => $email,
         'gender'     => $gender,
         'address'    => $address,

      );
      $_SESSION['info']= $info;
      header('Location: buy.php');
}else {
  
  setcookie('add_msg','Thông tin nhập chưa đủ!!', time()+3);
  header('Location: info.php');
}

// echo "<pre>";
//     print_r($info);
//   echo "</pre>";
?>
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
  

 </body>
 </html>