<?php

include("connection.php");


$ID = $_GET['ID'];
$sql = "UPDATE doc_approve SET status ='Approved' WHERE id='$ID'";
$sqli = "DELETE FROM doctor_regi WHERE id='$ID'";

if ($cn->query($sql) && $cn->query($sqli) === TRUE) {
	echo "<script>";
	echo "alert('Doctor Approved Successfully');";
	echo "window.location.href='Doc_app.php';";
	echo "</script>";
} else {
	echo "Erroring in Approved Process";
}

?>