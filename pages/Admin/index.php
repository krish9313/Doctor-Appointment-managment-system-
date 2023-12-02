<?php
session_start();
if (isset($_SESSION['unm2'])) {

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

    <style>
        table,
        tr {
            border: 2px solid white;
        }

        td {
            width: 33.33%;
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        include('include.php');
        ?>
        <!-- /.sidebar -->

        <div id="page-wrapper" style="height: 100vh;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <h1 class="page-header">Admin Dashboard</h1>
                        </center>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div><span style="font-size : 23px;">Doctor Registration</span></div>
                                    </div>

                                </div>
                            </div>
                            <a href="Doc_reg.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div><span style="font-size : 23px;">Approve Doctor Registration</span></div>
                                    </div>
                                    <?php
                                        include('connection.php');
                                        $countSql = "SELECT COUNT(*) AS count FROM doctor_regi";
                                        $countResult = $cn->query($countSql);
                                        $countRow = $countResult->fetch_assoc();
                                        $count = $countRow['count'];

                                    echo '<div class="col-xs-2 text-right">
                                            <span style="font-size:26px;">'. $count .'</span>
                                        </div>';
                                    ?>
                                </div>

                            </div>
                            <a href="Doc_app_reg.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div><span style="font-size : 23px;">Rejected Doctor </span></div>
                                    </div>
                                    <?php
                                        include('connection.php');
                                        $countSql = "SELECT COUNT(*) AS count FROM doc_rejected where status='Rejected'";
                                        $countResult = $cn->query($countSql);
                                        $countRow = $countResult->fetch_assoc();
                                        $count = $countRow['count'];

                                    echo '<div class="col-xs-2 text-right">
                                            <span style="font-size:26px;">'. $count .'</span>
                                        </div>';
                                    ?>
                                </div>
                            </div>
                            <a href="Doc_rej.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div><span style="font-size : 23px;"> Approved Doctor</span></div>
                                    </div>
                                    <?php
                                        include('connection.php');
                                        $countSql = "SELECT COUNT(*) AS count FROM doc_approve where status='Approved'";
                                        $countResult = $cn->query($countSql);
                                        $countRow = $countResult->fetch_assoc();
                                        $count = $countRow['count'];

                                    echo '<div class="col-xs-2 text-right">
                                            <span style="font-size:26px;">'. $count .'</span>
                                        </div>';
                                    ?>
                                </div>
                            </div>
                            <a href="Doc_app.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                   
                    <div class="col-lg-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div><span style="font-size : 23px;">Total Appointment</span></div>
                                    </div>
                                    <?php
                                        include('connection.php');
                                        $countSql = "SELECT COUNT(*) AS count FROM bookappoint";
                                        $countResult = $cn->query($countSql);
                                        $countRow = $countResult->fetch_assoc();
                                        $count = $countRow['count'];

                                    echo '<div class="col-xs-2 text-right">
                                            <span style="font-size:26px;">'. $count .'</span>
                                        </div>';
                                    ?>
                                </div>
                            </div>
                            <a href="all_appointment.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
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