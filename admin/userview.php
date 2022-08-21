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
	<link rel="stylesheet" type="text/css" href="script.css">
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
				<h1 class="mt-4"> Registered Users</h1>
			</div>
			<br>
			<div class="container mt-5 ml-5">
				<div class="row d-flex justify-content-center">

					<div class="table-responsive">
						<table class="table-striped  table-bordered text">
							<thead class="bg-dark text-white">
								<tr>
									<th class="py-3 text-white">id</th>
									<th class="py-3 text-white">Username</th>
									<th class="py-3 text-white">Email</th>
									<th class="py-3 text-white">Mobile</th>
									<th class="py-3 text-white">Operations</th>


								</tr>
							</thead>
							<tbody>
								<?php

								$dbcon = mysqli_connect("localhost", "root", "", "roomkhoji");

								$selectquery = "select * from registration";
								$query = mysqli_query($dbcon, $selectquery);
								// $result = mysqli_fetch_array($query);

								while ($result = mysqli_fetch_array($query)) {
								?>

									<tr>
										<td> <?php echo $result['id']; ?></td>
										<td> <?php echo $result['username']; ?></td>
										<td> <?php echo $result['email']; ?></td>
										<td> <?php echo $result['mobile']; ?></td>
										<td><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>




									</tr>


								<?php
								}


								?>







							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


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