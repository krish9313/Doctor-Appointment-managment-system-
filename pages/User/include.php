<!-- Icon Colour code 568DFF -->
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
                    <img src=".\icon\sett.png" width="30px" height="30px">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="settingsDropdown">
                    <a class="dropdown-item" href="sessionClose.php"><button class="btn btn-primary pull-right"
                            style="width :100%;" name="">Logout</button></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside class="sidebar navbar-default" role="navigation" style="margin-top:60px;">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="index.php" class="nav-link"><img src="..\icon\dashboard.png" width="20px"> &nbsp; Dashboard</a>
            </li>
            <li>
                <a class="nav-link" data-toggle="collapse" href="#Doctor"> <img src=".\icon\doctor.png"
                        style="height: 20px; width: 20px;"> &nbsp;&nbsp;Doctor<span class="fa arrow"></span></a>
                <div class="collapse" id="Doctor">
                    <ul class="nav nav-second-level">
                        <li>
                            <a href=".\Doc_reg.php">Doctor Registration</a>
                        </li>
                        <li>
                            <a href=".\Doc_app_reg.php">Approved Registration</a>
                        </li>
                        <li>
                            <a href=".\Doc_app.php">Approved Doctor</a>
                        </li>
                        <li>
                            <a href="Doc_rej.php">Rejected Doctor</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-link" data-toggle="collapse" href="#Appointment"> <img src="..\icon\l1.png"
                        style="height: 20px; width: 20px;"> &nbsp;&nbsp;Appointment<span class="fa arrow"></span></a>
                <div class="collapse" id="Appointment">
                    <ul class="nav nav-second-level">
                        <li>
                            <a href=".\new_appointment.php">New Appointment</a>
                        </li><!-- 
                        <li>
                            <a href=".\D_dwise_app.php">Doctor Daywise Appointment</a>
                        </li>
                        <li>
                            <a href=".\Doc_app_reg.php">Doctor Timewise Appointment</a>
                        </li>
                        <li>
                            <a href=".\Doc_app.php">Categorywise Appointment</a>
                        </li> -->
                        <li>
                            <a href="all_appointment.php">All Appointment</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-link" href="search.php"><img src=".\icon\search.png" style="height: 20px; width: 20px;">
                    &nbsp;&nbsp;Search </a>
            </li>
            <li>
                <a class="nav-link" href="report.php"> <img src=".\icon\layers.png" style="height: 20px; width: 20px;">
                    &nbsp;&nbsp;Report</a>
            </li>
        </ul>
    </div>
</aside>