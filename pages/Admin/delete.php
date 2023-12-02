<?php
$cn = mysqli_connect("localhost", "root", "", "damsdatabase");

if (!$cn) {
	die("Connection Failed: " . mysqli_connect_error());
} else {
	$ID = $_GET['ID'];

	// Sanitize the input using mysqli_real_escape_string
//	$name = mysqli_real_escape_string($cn, $r);

	$sql = "DELETE FROM bookappoint WHERE id = '$ID'";

	if (mysqli_query($cn, $sql)) {
		header("location:all_appointment.php");
	} else {
		echo "Error: " . mysqli_error($cn);
	}
}
?>