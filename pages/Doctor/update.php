<?php
session_start();
if (isset($_SESSION['unm1'])) {

} else {
    echo "<script>";
    echo "alert('Login First');";
    echo "window.location.href='../User/login.php';";
    echo "</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="./css/timeline.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        table {
            width: 100%;
            border: 2px ridge black;
            margin-bottom: 20px;
        }

        th {
            text-align: center;
            font-size: 16px;
        }

        tr,
        td,
        th {
            border: 2px ridge black;
        }

        td {
            padding: 15px 10px 0px 5px;
            font-size: 14px;

        }

        button {
            color: white;
            margin-right: 5px;
        }


        .form-control {
            background: transparent;
            border-radius: 0;
            border: 0.px solid black;
            border-bottom: 1px solid #eaeaea;
            color: #6c757d;
            font-weight: 400;
            margin-top: 15px;
            transition: all 0.3s;
        }

        #submit-button {
            background: #000000;
            border-bottom: 0;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            margin-top: 35px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Store the doctor options based on specialization
            var doctorOptions = {
                "General Surgery": ["Dr. Vivek Mistry"],
                "ENT": ["Dr. Anuj Sharma"]
                // Add more specializations and doctors as needed
            };

            // Store the doctor time options based on doctor
            var doctorTimeOptions = {
                "Dr. Vivek Mistry": ["8:00 AM to 14:00 PM"],
                "Dr. Anuj Sharma": ["10:00 AM to 13:00 PM"]
                // Add more doctors and time options as needed
            };

            // Function to update the doctor options
            function updateDoctorOptions(specialization) {
                var doctorList = $('#doctorlist');
                doctorList.empty();

                // Get the doctors for the selected specialization
                var doctors = doctorOptions[specialization];

                // Add the doctor options to the select element
                $.each(doctors, function (index, doctor) {
                    doctorList.append($('<option></option>').text(doctor));
                });

                // Update the doctor time options
                updateDoctorTimeOptions(doctorList.val());
            }

            // Function to update the doctor time options
            function updateDoctorTimeOptions(doctor) {
                var doctorTimeList = $('#doctorTime');
                doctorTimeList.empty();

                // Get the doctor time options for the selected doctor
                var doctorTimes = doctorTimeOptions[doctor];

                // Add the doctor time options to the select element
                $.each(doctorTimes, function (index, time) {
                    doctorTimeList.append($('<option></option>').text(time));
                });
            }

            // Event handler for the specialization select change
            $('#specialization').change(function () {
                var specialization = $(this).val();
                updateDoctorOptions(specialization);
            });

            // Event handler for the doctor select change
            $('#doctorlist').change(function () {
                var doctor = $(this).val();
                updateDoctorTimeOptions(doctor);
            });
        });
    </script>

</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper" style="height: 100%; margin-top: 50px;">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div><span style="font-size:35px;">Update</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" style="height: 100%;">

                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-lg-12 col-12 mx-auto">

                                            <form method="GET" action=update2.php>




                                                <?php

                                                $cn = mysqli_connect("localhost", "root", "", "damsdatabase");

                                                if (!$cn) {
                                                    die("Connection Failed :" . mysqli_connect_error());
                                                } else {


                                                    $ID = $_GET['ID'];
                                                    $sql = "Select * from bookappoint where id = '$ID'";

                                                    $rs = $cn->query($sql);

                                                    $r = $rs->fetch_assoc();



                                                    echo "<div class='row'>
                                <div class='col-lg-6'>
                                    <input type='number' name='txtid' value='$ID' readonly class='form-control'>
                                </div>
                                <div class='col-lg-6'>
                                    <input type='text' name='txtnm' value='$r[Name]' class='form-control'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-lg-6'>
                                    <input type='text' name='txtem' value='$r[Email]' class='form-control'>
                                </div>
                                <div class='col-lg-6'>
                                    <input type='telephone' name='txtTP' value='$r[Telephone]' maxlength='10' class='form-control'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-lg-6'>
                                    <input type='datetime-local' name='txtDT' value='$r[BDate]' class='form-control'>
                                </div>
                                <div class='col-lg-6'>

                                	<select name='txtspecialization' id='specialization' value='$r[specialization]'
                                        class='form-control' required>
                                        <option>Select specialization</option>
                                        <option>General Surgery</option>
                                        <option>ENT</option>
                                    </select>

                                </div>
                            </div>


                            <div class='row'>
                                <div class='col-lg-6'>

                                    <select name='txtdoctorlist' id='doctorlist' value='$r[Doctor]'
                                        class='form-control' required>
                                        <option>Select Doctor</option>
                                        <option>Dr. Anuj Sharma</option>
                                        <option>Dr. Vivek Mistry</option>
                            	</select>
                                </div>
                                <div class='col-lg-6'>
                                
                                    <input type='text' name='txtmsg' value='$r[message]' class='form-control'>
                                </div>
                            </div>

                                <div class='col-lg-3 col-md-4 col-6 mx-auto'>
                                    <button type='submit' class='form-control' name='submit' id='submit-button'>Update</button>
                                </div>
                            </div>";
                                                    $cn->close();
                                                }
                                                ?>
                                            </form>

                                        </div>

                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
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