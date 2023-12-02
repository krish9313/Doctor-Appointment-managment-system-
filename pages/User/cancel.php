<?php

$cn = mysqli_connect("localhost", "root", "", "damsdatabase");


$ID = $_GET['IDD'];

$sql = "UPDATE bookappoint SET us_app_cancel='Cancel' WHERE id='$ID'";

if ($cn->query($sql) === TRUE) {
	echo "<script>";
	echo "alert('Appointment Cancel Successfully');";
	echo "window.location.href='./cancelApp.php';";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('Appointment Canceling Error');";
	echo "window.location.href='./cancelApp.php';";
	echo "</script>";
}


?>