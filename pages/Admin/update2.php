<?php
$cn = mysqli_connect("localhost", "root", "", "damsdatabase");
if (!$cn) {
  echo "connection failed";
  die("Connection failed: " . mysqli_connect_error());
} else {
  $txtid = $_GET['txtid'];
  $txtnm = $_GET['txtnm'];
  $txtem = $_GET['txtem'];
  $txtTP = $_GET['txtTP'];
  $txtDT = $_GET['txtDT'];
  $txtspecialization = $_GET['txtspecialization'];
  $txtdoctorlist = $_GET['txtdoctorlist'];
  $txtmsg = $_GET['txtmsg'];

  $sql = "UPDATE bookappoint SET Name='$txtnm', Email='$txtem', Telephone='$txtTP', BDate='$txtDT', specialization='$txtspecialization', Doctor='$txtdoctorlist', message='$txtmsg' WHERE id='$txtid'";

  $ans = $cn->query($sql);
  header("location:all_appointment.php");
}

$cn->close();
?>