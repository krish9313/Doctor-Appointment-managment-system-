<?php
    session_start();
    if(isset($_SESSION['unm1']))
    {
                
    }
    else
    {
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

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
            font-size: 22px;
        }

        tr,
        td,
        th {
            border: 2px ridge black;
        }

        td {
            padding: 15px 0px 10px 15px;
            font-size: 18px;
            width: auto;
        }

        button {
            color: white;
            margin-right: 5px;
            width: 100px;
            height: 40px;
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
                <div class="row" style="margin-top: 50px;">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div><span style="font-size:35px;">Search</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">

                                <form id="basic-form" method="post">

                                    <div class="form-group">
                                        <label style="font-size: 20px;">Search by Appointment No./Name/Mobile
                                            No.</label>
                                        <input id="searchdata" type="text" name="searchdata" required="true"
                                            class="form-control" placeholder="Appointment No./Name/Mobile No."
                                            style="height:50px; font-size: 18px;">
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-primary" name="search"
                                        id="submit">Search</button>
                                </form>

                                <div class="clearfix"></div>
                            </div>
                        </div>
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