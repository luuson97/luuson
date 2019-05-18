<?php 

echo "<pre>";
	print_r($_GET);
echo "</pre>";


$class = $_GET['class'];
echo "Lớp học là :" .$class;
echo "<br>".$_GET['unit'];	

if (isset($_GET['unit'])) {
 	echo "<br>Name" . $_GET['unit'];
}
 ?>