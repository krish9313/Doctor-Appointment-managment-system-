<?php
session_start();

if (isset($_SESSION['unm'])) {
    // Destroy the session
    session_unset();
    session_destroy();

    echo "<script>";
    echo "alert('Logout Successfully');";
    echo "window.location.href = 'login.php';";
    echo "</script>";
}
?>