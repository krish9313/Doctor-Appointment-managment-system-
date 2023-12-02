<?php
session_start();


if ($_SESSION['unm2']) {
    session_destroy();
    echo "<script>";
    echo "alert('Logout Successfully');";
    echo "window.location.href='./Adminlogin.php';";
    echo "</script>";
}

?>