<?php

session_start();

$con = mysqli_connect('localhost', 'root');
if ($con) {
	echo "CONNECTED";
} else {
	echo "NO CONNECTION";
}
?>



<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<?php include 'links.php' ?>
</head>

<body>

	<header>
		<div class="container center-div shadow ">
			<div class="heading text-center mb-5 text-uppercase text-white"> Admin Login </div>
			<div class="container row d-flex flex-row justify-content-center mb-5">
				<div class="admin-form shadow p-2">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>Email Id </label>
							<input type="email" name="user" value="" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label> Password </label>
							<input type="password" name="pass" value="" class="form-control" required>
						</div>
						<input type="submit" class="btn btn-success" name="submit">
					</form>
				</div>
			</div>
		</div>
	</header>

</body>

</html>