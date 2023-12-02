<?php

include("connection.php");


$ID = $_GET['ID'];
$sql = "UPDATE doc_rejected SET status ='Rejected' WHERE id='$ID'";
$sqli = "DELETE FROM doctor_regi WHERE id='$ID'";

if ($cn->query($sql) && $cn->query($sqli) === TRUE) {
	echo "<script>";
	echo "alert('Doctor Rejection Successfully');";
	echo "window.location.href='Doc_rej.php';";
	echo "</script>";
} else {
	echo "Erroring in Approved Process";
}



?>