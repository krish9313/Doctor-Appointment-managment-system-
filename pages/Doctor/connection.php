<?php

$cn = mysqli_connect("localhost", "root", "", "DAMSDatabase");

if (!$cn) {
    die("Connection Failed :" . mysqli_connect_error());
} else {
    // echo "Connection Successfully";
}

?>