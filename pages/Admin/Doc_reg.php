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
<?php

include('connection.php');

if (isset($_POST['submit'])) {
    $f_nm = $_POST['f_nm'];
    $l_nm = $_POST['l_nm'];
    $U_nm = $_POST['U_nm'];
    $pass = $_POST['pass'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $speciality = $_POST['speciality'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $message = $_POST['message'];


    $sql = "INSERT INTO doctor_regi(f_nm, l_nm, username, password, Email, mobile, speciality, gender, state, city, message) VALUES ('$f_nm','$l_nm','$U_nm','$pass','$Email','$phone','$speciality','$gender','$state','$city','$message')";
    $sqli = "INSERT INTO doc_approve(f_nm, l_nm, username, password, Email, mobile, speciality, gender, state, city, message) VALUES ('$f_nm','$l_nm','$U_nm','$pass','$Email','$phone','$speciality','$gender','$state','$city','$message')";
    $sqlii = "INSERT INTO doc_rejected(f_nm, l_nm, username, password, Email, mobile, speciality, gender, state, city, message) VALUES ('$f_nm','$l_nm','$U_nm','$pass','$Email','$phone','$speciality','$gender','$state','$city','$message')";
    // $sq = "INSERT INTO user(username,password,speciality) VALUES ('$U_nm','$pass','$speciality')";

    if ($cn->query($sql) && $cn->query($sqli) && $cn->query($sqlii) === TRUE) {
        echo '<script>alert("Insertion Successfully")</script>';
    } else {
        echo '<script>alert("Error Insertion")' . $cn->error . '</script>';
    }

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
            /*            padding-top: 12px;*/
            /*            padding-bottom: 12px;*/
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
                <div class="row" style="margin-top: 50px;">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div><span style="font-size:35px;">Doctor Registration </span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" style="height: 100%;">

                                <div class="container-fluid">

                                    <div class="row">

                                        <div class="col-lg-12 col-12 mx-auto">

                                            <form role="form" method="POST" action="">


                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="f_nm"
                                                            placeholder="First Name" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="l_nm"
                                                            placeholder="Last Name" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="U_nm"
                                                            placeholder="Username " required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" name="pass"
                                                            placeholder="Password" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="email" class="form-control" name="Email"
                                                            placeholder="Email address" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="telephone" class="form-control" name="phone"
                                                            placeholder="Mobile Number" maxlength="10" required>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <select name="speciality" class="form-control">
                                                            <option>Select specialization</option>
                                                            <option>General Surgery</option>
                                                            <option>ENT</option>
                                                        </select>

                                                    </div>
                                                    <div class="col-lg-6">

                                                        <select name="gender" class="form-control">
                                                            <option>Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="state"
                                                            placeholder="State" required>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="city"
                                                            placeholder="City" maxlength="10" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <textarea class="form-control" rows="5" id="message"
                                                            name="message" placeholder="Additional Message"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                                    <button type="submit" class="form-control" name="submit"
                                                        id="submit-button">Register</button>
                                                </div>
                                        </div>
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