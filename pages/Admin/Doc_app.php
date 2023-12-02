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
            padding: 15px 10px 10px 15px;
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

        <!-- Navigation -->
        <?php
        include('include.php');
        ?>
        <!-- /.sidebar -->

        <div id="page-wrapper" style="height: 100vh;">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row" style=" margin-top: 50px;">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div><span style="font-size:35px;">Approved Doctor</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" style="height: 100%;">


                                <?php
                                $cn = mysqli_connect("localhost", "root", "", "damsdatabase");

                                if (!$cn) {
                                    die("Connection Failed :" . mysqli_connect_error());
                                } else {
                                    $sql = "Select *From doc_approve where status='Approved'";
                                    $rs = $cn->query($sql);
                                    echo "<table>";
                                    echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>First Name</th>";
                                    echo "<th>Last Name</th>";
                                    echo "<th>Username</th>";
                                    echo "<th>Password</th>";
                                    echo "<th>Email</th>";
                                    echo "<th>Mobile</th>";
                                    echo "<th>Speciality</th>";
                                    echo "<th>Gender</th>";
                                    echo "<th>State</th>";
                                    echo "<th>City</th>";
                                    echo "<th>Message</th>";
                                    echo "<th>Status</th>";
                                    echo "</tr>";
                                    while ($r = $rs->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $r['id'] . "</td>";

                                        echo "<td>" . $r['f_nm'] . "</td>";

                                        echo "<td>" . $r['l_nm'] . "</td>";

                                        echo "<td>" . $r['username'] . "</td>";

                                        echo "<td>" . $r['password'] . "</td>";

                                        echo "<td>" . $r['Email'] . "</td>";

                                        echo "<td>" . $r['mobile'] . "</td>";

                                        echo "<td>" . $r['speciality'] . "</td>";

                                        echo "<td>" . $r['gender'] . "</td>";

                                        echo "<td>" . $r['state'] . "</td>";

                                        echo "<td>" . $r['city'] . "</td>";

                                        echo "<td>" . $r['message'] . "</td>";

                                        echo "<td>" . $r['status'] . "</td>";


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