<?php

include('connection.php');
if (isset($_POST['submit'])) {
    $searchdata = $_POST['searchdata'];

    $sql = "select *from bookappoint where id='$searchdata'";

    if ($cn->query($sql) === TRUE) {
        echo '<script>alert("Insertion Successfully")</script>';
    } else {
        echo '<script>alert("Error Insertion")' . $cn->error . '</script>';
    }

}

?>

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
                            <a class="nav-link active" href="#contact">Contact</a>
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
                            <a class="nav-link" href="#contact">Contact</a>
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

                            <h2 class="text-center mb-lg-3 mb-2">Search Appointment History by Appointment
                                ID</h2>

                            <form role="form" method="post" action="checkAppointment.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input id="searchdata" type="text" name="searchdata" required="true"
                                            class="form-control" placeholder="Appointment Id">
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" class="form-control" id="submit-button">Check</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>
    <footer class="site-footer section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 me-auto col-12">
                    <h5 class="mb-lg-4 mb-3">Timing</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">

                            10:30 am to 7:30 pm </li>
                    </ul>
                    <h5 class="mb-lg-4 mb-3">Email</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            info@gmail.com</li>
                        <br>
                        <h5 class="mb-lg-4 mb-3">Contact Number</h5>
                        <li class="list-group-item d-flex">
                            7896541239</li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                    <h5 class="mb-lg-4 mb-3">Our Clinic</h5>



                    <p>890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ms-auto">
                    <h5 class="mb-lg-4 mb-2">Socials</h5>

                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>


                </div>



            </div>

        </div>
    </footer>

</html>