<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor Appointment Management System || Home Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/templatemo-medic-care.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


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

        .tt1 {
            text-align: center;
        }
    </style>


<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="home.php">
                    Doctor Appointment
                    <strong class="d-block">Management System</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                    <a class="navbar-brand d-none d-lg-block">
                        <span class="header-title">Doctor Appointment</span>
                        <strong class="d-block header-subtitle">Management System</strong>
                    </a>
                    <ul class="navbar-nav mx-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href=".\checkappo.php">Check Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".\bookappoinment.php">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=".\cancelApp.php">Cancel Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=".\checkappo.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".\login.php">Doctor</a>
                        </li>
                    </ul>
                </div>
                <!-- 
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home.php">About</a>
                        </li>
                        <a class="navbar-brand d-none d-lg-block" href="index.php">
                            Doctor Appointment
                            <strong class="d-block">Management System</strong>
                        </a>
                        
                        <li class="nav-item">
                            <a class="nav-link" href=".\checkappo.php">Check Appointment</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href=".\bookappoinment.php">Booking</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href=".\cancelApp.php">Cancel Appointment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".\checkappo.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=".\login.php">Doctor</a>
                        </li>
                    </ul>
                </div>
 -->
            </div>
        </nav>

        <section class="section-padding" id="booking">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mx-auto">
                        <div class="booking-form">

                            <h2 class="text-center mb-lg-3 mb-2">Cancel Appointment History by Appointment
                                ID</h2>

                            <form role="form" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input id="searchdata" type="text" name="searchdata" required="true"
                                            class="form-control" placeholder="Appointment Id">
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" name="submit" class="form-control"
                                            id="submit-button">Check</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>

            <div class="container" style="margin-top: 50px;">
                <div class="row">

                    <div class="col-lg-12 col-12 mx-auto">
                        <div class="booking-form">


                            <?php
                            if (isset($_POST['submit'])) {
                                $cn = mysqli_connect("localhost", "root", "", "damsdatabase");

                                if (!$cn) {
                                    die("Connection Failed :" . mysqli_connect_error());
                                } else {

                                    $searchdata = $_POST['searchdata'];
                                    $sql = "Select *From bookappoint where id='$searchdata'";
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
                                    echo "<th>Appointment</th>";
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
                                        echo $r['us_app_cancel'];
                                        echo "</td>";

                                        echo "<td class='tt1'>" . "<a href='cancel.php?IDD=$r[id]'><button class='btn btn-primary'>Cancel</button></a>" . "</td>";

                                    }

                                    echo "</table>";
                                }
                            }

                            ?>



                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>

</html>