<?php
session_start();

if (isset($_POST['submit'])) {
	include('connection.php');
	$a = $_POST['txtnm'];
	$b = $_POST['txtpsw'];

	$sql = "select *from user where username ='$a' and password ='$b'";

	$rs = $cn->query($sql);
	$r = $rs->fetch_assoc();
	$spe = $r['speciality'];
	if (is_array($r)) {
		$_SESSION['unm2'] = $r['username'];
	} else {
		$msg = "<script>alert('INVALID email or password')</script>";
	}
	if (isset($_SESSION["unm2"])) {

		// header("location:user/index.php");
		if ($a == 'admin' && $b == 'admin' && $spe == 'admin') {
			echo "<script>";
			echo "alert('Admin Login Successfully');";
			echo "window.location.href='../Admin/index.php';";
			echo "</script>";
		} else {
			echo "<script>";
			echo "alert('Invalid Username And Password');";
			echo "</script>";
		}

	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>DAMS - Login Page</title>

	<link rel="stylesheet" href="../User/css/bootstrap.css">
	<link rel="stylesheet" href="../User/css/templatemo-medic-care.css">
	<link rel="stylesheet" href="../User/css/login-pages.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="simple-page">
	<div id="back-to-home">
		<a href="..\User\home.php" class="btn btn-outline btn-default"><i class="bi bi-house-door"></i></a>
	</div>

	<div class="simple-page-wrap">

		<div class="simple-page-logo animated swing">

			<span style="color: white"><i class="fa fa-gg"></i></span>
			<span style="color: white">DAMS</span>

		</div><!-- logo -->

		<div class="simple-page-form animated flipInY" id="login-form">

			<h4 class="form-title m-b-xl text-center">Sign In With Your DAMS Admin Account</h4>

			<form method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="txtnm" placeholder="Enter Registered Email ID"
						required="true" name="Email">
				</div>

				<div class="form-group">
					<input type="password" class="form-control" name="txtpsw" placeholder="Password" name="PWD"
						required="true">
				</div>

				<input type="submit" class="btn btn-primary" name="submit" value="Sign IN">

			</form>
			<a href="..\User\login.php">
				<button class="btn btn-primary" style="margin-top: 5px;">Doctor Login</button>
			</a>
			<hr />
		</div>
	</div>
</body>

</html>