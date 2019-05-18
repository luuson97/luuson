<?php 
	session_start();
   $maSV = $_POST['maSV'];
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $gioiTinh = $_POST['gioiTinh'];
   $address = $_POST['add'];
   $array = [$maSV,$name,$phone,$email,$gioiTinh,$address];
   if (isset($maSV)  && isset($name) &&isset($phone)&& isset($email) && isset($gioiTinh) && isset($address)) {
   	$_SESSION['isLogin'] = true;
   	$_SESSION['data']=$array;
   }else {$_SESSION['isLogin'] = false;}
   // $_SESSION['maSV']=$maSV;
   header('Location: admin.php');
   // echo $maSV;


?>