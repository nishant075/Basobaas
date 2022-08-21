<?php

session_start();

if (!isset($_SESSION['user'])) {
	header('location:admin.php');
}



?>




<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<?php include 'links.php' ?>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sidebar-heading">Welcome Admin </div>
			<div class="list-group list-group-flush">
				<a href="adminmainpage.php" id="das" name="das" class="list-group-item list-group-item-action bg-light">Dashboard</a>
				<a href="userview.php" class="list-group-item list-group-item-action bg-light">User</a>
				<a href="alert.php" class="list-group-item list-group-item-action bg-light">Alerts</a>
				<a href="message.php" class="list-group-item list-group-item-action bg-light">Contact</a>
				<a href="/ROOMFINDER/admin/logout.php" class="list-group-item list-group-item-action bg-light text-danger">Logout</a>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<button class="btn btn-primary" id="menu-toggle">Menu</button>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">



					</ul>
				</div>
			</nav>

			<div class="container-fluid">
				<h1 class="mt-4"> Dashboard</h1>




			</div>
			<a href="/roomfinder/user/display.php">
				<button type="button" class="btn btn-primary btn-lg ml-5 mt-5">See properties</button></a>

		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Menu Toggle Script -->
	<script>
		$(document).ready(function() {
			$("#das").click(function() {
				$("#posts").load("chapters/dashboard.php");
			});
		});
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>


</body>

</html>