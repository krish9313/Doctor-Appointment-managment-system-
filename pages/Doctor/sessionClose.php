<?php
session_start();


if ($_SESSION['unm1']) {
    session_destroy();
    echo "<script>";
    echo "alert('Logout Successfully');";
    echo "window.location.href='../User/login.php';";
    echo "</script>";
}

?>