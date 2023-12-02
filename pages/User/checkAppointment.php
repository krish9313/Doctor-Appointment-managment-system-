<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            background-color: #EFF1E2;
        }

        #d1 {
            width: 1000px;
            background-color: #ffffff;
            border: 1px solid;
            position: absolute;
            top: 50%;
            left: 50%;
            padding: 10px;
            transform: translate(-50%, -50%);

        }

        table {
            width: 100%;
            border: 2px ridge black;
            margin-bottom: 20px;
        }

        th {
            font-size: 16px;
            padding-left: 10px;
        }

        tr,
        td,
        th {
            border: 2px ridge black;
        }

        td {
            padding: 15px 0px 10px 15px;
            font-size: 14px;

        }

        input[type='text'],
        input[type='telephone'],
        input[type='email'],
        input[type='datetime-local'] {
            width: 100%;
            height: 30px;
            border: none;
            font-size: 20px;
        }

        button {
            margin-right: 5px;
            float: right;
            height: 35px;
            width: 100px;
        }
    </style>
</head>

<body>

    <div class="container-fluid" id="d1">

        <h3>Appointment Detailes</h3><br>
        <?php
        $cn = mysqli_connect("localhost", "root", "", "damsdatabase");

        if (!$cn) {
            die("Connection Failed :" . mysqli_connect_error());
        } else {
            $searchdata = $_POST['searchdata'];
            $sql = "Select *From bookappoint where id='$searchdata'";
            $rs = $cn->query($sql);

            $r = $rs->fetch_assoc();

            echo "<table>";
            echo "<tr>";
            echo "<th>Appointment ID</th>";
            echo "<td><input type='text' value='$r[id]' readonly></td>";

            echo "<th>Patient Name</th>";
            echo "<td><input type='text' value='$r[Name]' readonly></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Mobile Number</th>";
            echo "<td><input type='telephone' value='$r[Telephone]' readonly></td>";

            echo "<th>Email</th>";
            echo "<td><input type='email' value='$r[Email]' readonly></td>";
            echo "</tr>";


            echo "<tr>";
            echo "<th>Appointment DateTime</th>";
            echo "<td><input type='datetime-local' value='$r[BDate]' readonly></td>";

            echo "<th>Specialization</th>";
            echo "<td><input type='text' value='$r[specialization]' readonly></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Doctor</th>";
            echo "<td><input type='text' value='$r[Doctor]' readonly></td>";

            echo "<th>Message</th>";
            echo "<td><input type='text' value='$r[message]' readonly></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th colspan='2'>Doctor Approving Status</th>";
            echo "<td colspan='2'><input type='text' value='$r[do_app_cancel]' readonly></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th colspan='2'>Approved Date And Time</th>";
            echo "<td colspan='2'><input type='text' value='$r[app_date]' readonly></td>";
            echo "</tr>";

            echo "</table>";
        }
        ?>


        <!-- <p style="text-align: left;">If you have update any detailes to click update</p> -->


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>Please take a screenshot of this detailes and usefull to search your appointment to this
                        appointment ID.</p>
                </div>
                <div class="col-sm-6">
                    <a href=".\checkappo.php"><button class="btn btn-primary">Go to Home</button></a>
                </div>
            </div>

        </div>


</body>

</html>