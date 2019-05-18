<?php 
	session_start();
   $code = $_POST['code'];
   $full_name = $_POST['full_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $address = $_POST['add'];
   $array = [$code,$full_name,$phone,$email,$gender,$address];
   if (isset($code)  && isset($full_name) &&isset($phone)&& isset($email) && isset($gender) && isset($address)) {
   	$_SESSION['isLogin'] = true;
   	$_SESSION['data']=$array;
   }else {$_SESSION['isLogin'] = false;}
   // $_SESSION['maSV']=$maSV;
   
   // echo $maSV;

   $info = array(
      'ID'     => '123',
      'NAME'   => 'sƠN',
      'email'  => '123432dsfds@fasddf.com',
      'phone'  => '02946743',

   );
   $_SESSION['info'] = $info;


   header('Location: lis.php');

?>