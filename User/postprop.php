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

  <title>Post Property</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/postprop.css">

</head>

<body>

  <?php



  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  ?>
    <h4><?php echo $_SESSION['status'] ?></h4>
  <?php
    unset($_SESSION['status']);
  }

  ?>













  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Properties</a>
        <a href="/ROOMFINDER/logout.php" class="list-group-item list-group-item-action bg-light text-danger">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/ROOMFINDER/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ROOMFINDER/listings.php">Listings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ROOMFINDER/contact.php">Contact</a>
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
      <form action="radio.php" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
          <h5 class="mt-4 text-center ">POST PROPERTY FREE</h5>
          <div class="card bg-light mb-3">
            <div class="card-body">
              <div class="purpose">
                <p><b>I Want to <span style="color: red">*</span>:</b></p>
                <input type="radio" id="sale" name="purpose" value="sale">
                <label for="sale">Sale</label>
                <input type="radio" id="rent" name="purpose" value="rent">
                <label for="rent">Rent</label>
                <input type="radio" id="buy" name="purpose" value="lease">
                <label for="lease">Lease</label>
              </div>

              <div class="type mt-2">
                <p><b>Property Category <span style="color: red">*</span>:</b></p>
                <button type="button" class="btn btn-sm btn-outline-primary mx-1"> <i class="fa fa-home"></i><br>House</button>
                <button type="button" class="btn btn-sm btn-outline-success mx-1"> <i class="fa fa-map"></i><br>Land</button>
                <button type="button" class="btn btn-sm btn-outline-primary mx-1"> <i class="fa fa-building"></i><br>Flat</button>
              </div>
              <div class="address mt-4">
                <p><b>Address <span style="color: red">*</span>:</b></p>
                <div class="form-row">
                  <div class="form-group col-md-6">

                    <input type="text" class="form-control" name="address" id="inputCity" placeholder="eg.House Name,Street Name">
                  </div>
                  <div class="form-group col-md-4">

                    <select id="inputState" name="city" class="form-control" placeholder="District">
                      <option>Kathmandu</option>
                      <option>Lalitpur</option>
                      <option>Bhaktapur</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <input type="text" class="form-control" name="ward" placeholder="Ward No.">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Basic description Ends-->



          <div class="card bg-light mb-3">
            <div class="card-body">

              <div class="Area">
                <p><b>Total Area <span style="color: red">*</span>:</b></p>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <input type="text" class="form-control" name="area" placeholder="eg. 0-1-2-4 / 325">
                  </div>
                  <div class="form-group col-md-3">
                    <select name="measure" class="form-control">
                      <option>Aana</option>
                      <option>Ropani</option>
                      <option>Kattha</option>
                      <option>Sq.metre</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="builtarea">
                <p><b>Built Area <span style="color: red">*</span>:</b></p>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <input type="text" class="form-control" name="builtarea" placeholder="eg. 0-1-2-4 / 325">
                  </div>
                  <div class="form-group col-md-3">
                    <select name="builtmeasure" class="form-control">
                      <option>Aana</option>
                      <option>Ropani</option>
                      <option>Kattha</option>
                      <option>Sq.metre</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Area details ends here-->
          <div class="card bg-light mb-3">
            <div class="card-body">
              <div class="details">
                <p><b>Building Details:</b></p>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <input type="text" class="form-control" name="builtyear" placeholder="Built year">
                  </div>
                  <div class="form-group col-md-3">
                    <input type="text" class="form-control" name="floors" placeholder="Floors">
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Kitchen</label>
                  <select class="form-control" name="kitchen">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Bedroom</label>
                  <select class="form-control" name="bedroom">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Bathroom</label>
                  <select class="form-control" name="bathroom">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Parking</label>
                  <select class="form-control" name="parking">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="exampleFormControlSelect1">Living Room</label>
                  <select class="form-control" name="living_room">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <!--Building Details Ends here-->

          <!--Photos section ends-->
          <div class="card bg-light mb-3">
            <div class="card-body">
              <div class="title">
                <p><b>Property Title<span style="color: red">*</span>:</b></p>

                <div class="form-group col-md-5">
                  <input type="text" class="form-control" name="title" placeholder="Title">
                </div>


              </div>
              <div class="description">
                <p><b>Property Description<span style="color: red">*</span>:</b></p>
                <div class="form-group">
                  <textarea class="form-control" name="description" rows="5"></textarea>
                </div>
              </div>

              <div class="price">
                <p><b>Price:</b></p>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <input type="number" class="form-control" name="price" placeholder="Property Price">
                  </div>

                </div>

              </div>
            </div>




          </div>
          <div class="card bg-light mb-3">
            <div class="card-body">
              <div class="photo">
                <h6><b>Upload Images<span style="color: red">*</span>:</b></h6>
                <p>Click on the "Choose File" button to upload a file:</p>


                <input type="file" id="myFile" name="photo" multiple>


              </div>
            </div>
          </div>
          <!--Price things ends here-->
          <div class="card bg-light mb-3">
            <div class="card-body">
              <div class="ownername">
                <p><b>Ownername<span style="color: red">*</span>:</b></p>

                <div class="form-group col-md-5">
                  <input type="text" class="form-control" name="ownername" id="ownname" value="<?php echo  $_SESSION['username']; ?> " required>
                </div>

              </div>
              <div class="ownernumber">
                <p><b>OwnerEmail<span style="color: red">*</span>:</b></p>

                <div class="form-group col-md-5">
                  <input type="text" class="form-control" name="ownernumber" id="ownnum" placeholder="Ownernumber" required><br>
                  <input type="submit" name="submit">
                </div>

              </div>
            </div>
      </form>
    </div>

  </div>
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