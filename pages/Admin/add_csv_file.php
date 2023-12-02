<?php
session_start();
if (isset($_SESSION['unm2'])) 
{

} else {
    echo "<script>";
    echo "alert('Doctor Login Successfully');";
    echo "window.location.href='../User/login.php';";
    echo "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link rel="stylesheet" href="styles.css" />
    <script src="Jquery/jQuery.js"></script>
    <title>Add CSV FILE</title>


    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="./css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        .form-control {
            background: transparent;
            border-radius: 0;
            border: 0.px solid black;
            border-bottom: 1px solid #eaeaea;
            color: #6c757d;
            font-weight: 400;
            /*            padding-top: 12px;*/
            /*            padding-bottom: 12px;*/
            margin-top: 15px;
            transition: all 0.3s;
        }
    </style>

</head>

<body>
    <?php
    include "include.php";
    ?>

    <div class="col-md-1">
    </div>

    <div class="col-md-2">
    </div>
    <div class="col-md-4 my-5">

        <div style="margin-top: 100px;">
            <h2 class="my-5">ADD CSV FILE</h2>
        </div>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'damsdatabase');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST["done"])) {
            $file_name = $_FILES["file"]["tmp_name"];
            $file_open = fopen($file_name, "r");

            while (($csv = fgetcsv($file_open, 1000, ",")) !== false) {
                $d2 = mysqli_real_escape_string($conn, $csv[1]);
                $d3 = mysqli_real_escape_string($conn, $csv[2]);
                $d4 = mysqli_real_escape_string($conn, $csv[3]);

                $query = "INSERT INTO CSV(username, password, speciality) VALUES ('$d2', '$d3', '$d4')";
                if (mysqli_query($conn, $query)) {
                    echo "Successfully inserted<br/>";
                } else {
                    echo "Not inserted: " . mysqli_error($conn) . "<br/>";
                }
            }

            fclose($file_open);
        }

        mysqli_close($conn);
        ?>

        <div id="wrapper">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file" class="form-control" />
                <br>

                <input type="submit" name="done" class="btn btn-primary" />
            </form>
        </div>



        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>


</body>

</html>