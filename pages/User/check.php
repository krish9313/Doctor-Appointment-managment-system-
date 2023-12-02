<?php


$Email = $_POST['Email'];
$Password = $_POST['PWD'];

if ($Email == 'admin123@gmail.com' && $Password == 'admin123') {
	header('location:index.php');
} else {
	echo "<script>";
	echo 'alert("Please Enter right Email and Password");';
	echo "</script>";
	header('location:login.php');
}


?>