<?php
session_start();

if (!isset($_SESSION['username'])) {
  /*the php in above line checks loads the if fuction if the name of user below is not loaded*/
  echo "Login Again";
  header('location:/ROOMFINDER/login.php');
  /*this header fuction loads back to the login page*/
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Welcome <?php echo  $_SESSION['username']; ?> </div>
      <div class="list-group list-group-flush">
        <a href="dashboard.php" id="das" name="das" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="postprop.php" class="list-group-item list-group-item-action bg-light">Properties</a>
        <a href="/ROOMFINDER/logout.php" class="list-group-item list-group-item-action bg-light text-danger">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><?php echo  $_SESSION['username']; ?></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/roomfinder/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/roomfinder/listings.php">Listings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/roomfinder/contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>


          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4"> Dashboard</h1>

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