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

    <!-- Custom CSS -->
    <link href="./css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--  <style>

            table
            {
                width: 100%;
            }

            .tr1
            {
                height: 20px;
            }

        </style> -->

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
    </style>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="row" style="width: 100vw;">
                <div class="col-md-2" style="height: 50px;">
                </div>
                <div class="col-md-8 text-center" style="height: 50px;">
                    <span style="font-size: 30px; color: whitesmoke;">Doctor Appointment Management System</span>
                </div>
                <div class="col-md-2" style="height: 50px;">
                    <div class="dropdown pull-right" style="margin-top :10px;">
                        <a href="#" role="button" id="settingsDropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="..\icon\sett.png" width="30px" height="30px">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="settingsDropdown"
                            style="height:40px;">
                            <label style="width:100%;"><a class="dropdown-item" href="sessionClose.php"><button
                                        class="btn btn-primary pull-right" style="width :100%;"
                                        name="">Logout</button></a></label>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <aside class="sidebar navbar-default" role="navigation" style="margin-top:60px;">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="Doctor.php" class="nav-link"><img src="..\icon\dashboard.png" width="20px"> &nbsp;
                            Dashboard</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="collapse" href="#Appointment"> <img src="..\icon\l1.png"
                                style="height: 20px; width: 20px;"> &nbsp;&nbsp;Appointment<span
                                class="fa arrow"></span></a>
                        <div class="collapse" id="Appointment">
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ENT_all_appo.php">All Appointment</a>
                                </li>
                                <li>
                                    <a href="neew_appointment.php">All Appointment</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="page-wrapper" style="height: 100vh;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <h1 class="page-header" id="User"><b>All Appointment</b></h1>
                        </center>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div><span style="font-size:35px;">Manage Appointment </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">

                                <?php
                                $cn = mysqli_connect("localhost", "root", "", "damsdatabase");

                                if (!$cn) {
                                    die("Connection Failed :" . mysqli_connect_error());
                                } else {
                                    $sql = "Select *From bookappoint where specialization='ENT' && app_date IS NULL";
                                    $rs = $cn->query($sql);
                                    echo "<table>";
                                    echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Date</th>";
                                    echo "<th>Specification</th>";
                                    echo "<th>Doctor</th>";
                                    echo "<th>Message</th>";
                                    echo "<th>Appointment</th>";
                                    echo "<th>Status</th>";
                                    echo "<th>Approve Date</th>";
                                    echo "<th colspan='2'>Action</th>";
                                    echo "</tr>";
                                    while ($r = $rs->fetch_assoc()) {
                                        echo "<tr>";
                                        
                                        echo "<td>";
                                        echo $r['id'];
                                        echo "</td>";

                                        echo "<td>";
                                        echo $r['Name'];
                                        echo "</td>";

                                        echo "<td>";
                                        echo $r['BDate'];
                                        echo "</td>";

                                        echo "<td>";
                                        echo $r['specialization'];
                                        echo "</td>";

                                        echo "<td>";
                                        echo $r['Doctor'];
                                        echo "</td>";


                                        echo "<td>";
                                        echo $r['message'];
                                        echo "</td>";


                                        echo "<td>";
                                        echo $r['us_app_cancel'];
                                        echo "</td>";


                                        echo "<td>";
                                        echo $r['do_app_cancel'];
                                        echo "</td>";


                                        echo "<td>";
                                        echo $r['app_date'];
                                        echo "</td>";

                                        echo "<td>" . "<a href='approve.php?ID=$r[id]&SPE=$r[specialization]'><button class='btn btn-primary'>Approve</button></a>" . "</td>";

                                        echo "<td>" . "<a href='reject.php?ID=$r[id]&SPE=$r[specialization]'><button class='btn btn-danger'>Reject</button></a>" . "</td>";
                                        echo "</tr>";
                                    }

                                    echo "</table>";
                                }
                                ?>


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