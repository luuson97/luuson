<?php 
	session_start();
   // include_once('add.php');
   $code = $_POST['code'];
   $full_name = $_POST['full_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $address = $_POST['add'];
 
 
   $info = array(
      'code'       => $code,
      'full_name'  => $full_name,
      'phone'      => $phone,
      'email'      => $email,
      'gender'     => $gender,
      'address'    => $address,

   );
   $_SESSION['info'][]= $info;
   // unset($_SESSION['info']);
   // $_SESSION['data']=$_SESSION['info'][];

   header('Location: list.php');

?>