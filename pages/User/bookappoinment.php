<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['phone'];
    $date = $_POST['date'];
    $specialization = $_POST['specialization'];
    $doctorlist = $_POST['doctorlist'];
    $message = $_POST['message'];


    $sql = "INSERT INTO bookappoint(Name,Email,Telephone,BDate,specialization,Doctor,message,us_app_cancel,do_app_cancel) values('$name','$email','$telephone','$date','$specialization','$doctorlist','$message','Waiting','Pending');";

    if ($cn->query($sql) === TRUE) {
        echo "<a href='checkDetailes.php?nm=$name&mn=$telephone'><button>Check All Detailes</button></a>";
    } else {
        echo "Error Creating table :" . $cn->error;
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/templatemo-medic-care.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



    <style>
        .section-padding {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .booking-form .form-control {
            background: transparent;
            border-radius: 0;
            border: 0.px solid black;
            border-bottom: 1px solid #eaeaea;
            color: #6c757d;
            font-weight: 400;
            padding-top: 12px;
            padding-bottom: 12px;
            margin-top: 15px;
            transition: all 0.3s;
        }

        .booking-form #submit-button {
            background: #000000;
            border-bottom: 0;
            font-weight: 600;
            color: white;
            text-transform: uppercase;
            margin-top: 35px;
        }


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
            font-size: 14 px;
            width: auto;
        }
    </style>
</head>

<body>
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



    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="index.html">
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
        </div>
    </nav>
    <section class="section-padding" id="booking">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">

                        <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>

                        <form role="form" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Full name" required="true">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email address" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        placeholder="Enter Phone Number" maxlength="10">
                                </div>


                                <div class="col-lg-6 col-12">
                                    <select name="specialization" id="specialization" class="form-control">
                                        <option>Select specialization</option>
                                        <option>General Surgery</option>
                                        <option>ENT</option>
                                    </select>
                                </div>


                                <div class="col-lg-6 col-12">
                                    <select name="doctorlist" id="doctorlist" class="form-control">
                                        <option>Select Doctor</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <select name="doctorTime" id="doctorTime" class="form-control">
                                        <option>Select Time</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <input type="datetime-local" name="date" id="date" value="" class="form-control">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="message" name="message"
                                        placeholder="Additional Message"></textarea>
                                </div>

                                <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                    <button type="submit" class="form-control" name="submit" id="submit-button">Book
                                        Now</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
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
</body>

</html>