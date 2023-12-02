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
                                    $sql = "Select *From bookappoint";
                                    // $sql = "SELECT *, ROW_NUMBER() OVER (ORDER BY id) AS row_number FROM bookappoint";
                                    $rs = $cn->query($sql);
                                    echo "<table>";
                                    echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Email</th>";
                                    echo "<th>Telephone</th>";
                                    echo "<th>Date</th>";
                                    echo "<th>Specification</th>";
                                    echo "<th>Doctor</th>";
                                    echo "<th>Message</th>";
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
                                        echo $r['Email'];
                                        echo "</td>";


                                        echo "<td>";
                                        echo $r['Telephone'];
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

                                        echo "<td>" . "<a href='update.php?ID=$r[id]'><button class='btn btn-primary'>Update</button></a>" . "</td>";

                                        echo "<td>" . "<a href='reject.php?ID=$r[id]'><button class='btn btn-danger'>Delete</button></a>" . "</td>";
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