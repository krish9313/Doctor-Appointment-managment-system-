<?php
$cn = mysqli_connect("localhost", "root", "", "damsdatabase");

if (!$cn) {
	die("Connection Failed: " . mysqli_connect_error());
} else {
	$ID = $_GET['ID'];
	$SPE = $_GET['SPE'];

	$sql = "update bookappoint set do_app_cancel='Cancel' WHERE id = '$ID'";

	if ($SPE == 'General Surgery') {
		if (mysqli_query($cn, $sql)) {
			header("location:Genral_all_appoint.php");
		} else {
			echo "Error: " . mysqli_error($cn);
		}
	}

	if ($SPE == 'ENT') {
		if (mysqli_query($cn, $sql)) {
			header("location:ENT_all_appo.php");
		} else {
			echo "Error: " . mysqli_error($cn);
		}
	}


}
?>