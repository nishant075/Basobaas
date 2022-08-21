<html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <!--Fonts Link-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">






  <!--Fonts Link ends-->
  <link rel="stylesheet" href="css/info.css">

  <title>Description</title>
</head>

<body>



  <!--Navbar Starting-->
  <section class="navbar">
    <div class="container" style="margin-bottom:5rem;">
      <nav class="navbar nav-pills fixed-top navbar-expand-lg bg-white shadow-sm">
        <a class="navbar-brand" href="index.php">Room Finder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item current_page_item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listings.php">Listings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Help.php">Help</a>
            </li>
            <a href="User/postprop.php"><button type="button" class="btn btn-success">Post Property Free</button></a>
            <a href="login.php"><button type="button" class="btn btn-outline-primary">Login</button></a>

          </ul>
        </div>
      </nav>
    </div>
  </section>
  <!--Navbar ends-->
  <?php

  $dbcon = mysqli_connect("localhost", "root", "", "roomkhoji");
  $id = $_GET['id'];
  $selectquery = "select * from radioin WHERE id='$id'";
  $query = mysqli_query($dbcon, $selectquery);

  // $result = mysqli_fetch_array($query);

  while ($result = mysqli_fetch_array($query)) {


  ?>

    <section class="title">
      <h2 class="ml-4 mt-4"><?php echo $result['title'];  ?></h2>
      <span class="ml-4 mt-4 text-muted"><?php echo $result['address'];  ?></span>
      <i class="fas fa-house-user"></i>
      <button type="button" class="btn btn-success btn-sm ml-5 text-inline"> <?php echo $result['purpose']; ?></button>
    </section>


    <!--Photo grid starts-->


    <section class="carousel">
      <div class="mx-4 my-5 w-100">
        <div id="carouselExampleControls" class="carousel slide position-absolute" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="User/<?php echo
                              $result['pic'];  ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img_nature_wide.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img_5terre_wide.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!--Carousel ends-->

    <div class="container py-5" style="position: absolute; margin-top: 25%;">
      <div class="p-5 bg-white rounded shadow mb-5 mt-4">
        <!-- Rounded tabs -->
        <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
          <li class="nav-item flex-sm-fill">
            <a id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">Description</a>
          </li>
          <li class="nav-item flex-sm-fill">
            <a id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Details</a>
          </li>
          <li class="nav-item flex-sm-fill">
            <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Contact</a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div id="description" role="tabpanel" aria-labelledby="description-tab" class="tab-pane fade px-3 py-5 show active">
            <h2><?php echo $result['description'];  ?></h2>
            <br>

            <h6><b>Address: </b><?php echo $result['address'];  ?></h6><br>
            <h6><b>Owner Name: </b><?php echo $result['ownername'];  ?></h6><br>
            <h6><b>Owner Number: </b><?php echo $result['ownernumber'];  ?></h6><br>

            <h3><b>Price: <i class="fa fa-inr" aria-hidden="true"></i></b><?php echo $result['price'];  ?></h3>
          </div>
          <div id="details" name="details" role="tabpanel" aria-labelledby="details-tab" class="tab-pane fade px-3 py-5" style="font-family:Verdana, Geneva, Tahoma, sans-serif">

            <span><b>City: </b><?php echo $result['city'];  ?></span><br>
            <span><b>Ward: </b><?php echo $result['ward'];  ?></span><br>
            <span><b>Built year: </b><?php echo $result['builtyear'];  ?></span><br>
            <span><b>Area: </b><?php echo $result['area'];  ?></span><br>
            <span><b>Built area: </b><?php echo $result['builtarea'];  ?></span><br>
            <span><b>Measure: </b><?php echo $result['measure'];  ?></span><br>
            <span><b>Built measure: </b><?php echo $result['builtmeasure'];  ?></span><br>
            <span><b><i class="fa fa-bars" aria-hidden="true"></i> Floors </b>:<?php echo $result['floors'];  ?></span><br>
            <span><b><i class="fa fa-bed" aria-hidden="true"></i> Bedroom </b>:<?php echo $result['bedroom']; ?></span><br>
            <span><b><i class="fa fa-fire" aria-hidden="true"></i> kitchen </b>:<?php echo $result['kitchen'];  ?></span><br>
            <span><b><i class="fa fa-car" aria-hidden="true"></i> Parking </b>: <?php echo $result['parking'];  ?></span><br>
            <span><b><i class="fa fa-bath" aria-hidden="true"></i> Bathroom </b>: <?php echo $result['living_room']; ?></span><br>
          </div>

          <?php

          try {

            $db = new mysqli("localhost", "root", "", "roomkhoji");
          } catch (Exception $exc) {
            echo $exc->getTraceAsString();
          }

          if (isset($_POST['ownername']) && isset($_POST['ownernumber']) && isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['message'])) {

            $ownername = $_POST['ownername'];
            $ownernumber = $_POST['ownernumber'];
            $propertyid = $_POST['propertyid'];
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $message = $_POST['message'];



            $is_insert = $db->query("INSERT INTO `alert`( `ownername`, `ownernumber`,`propertyid`, `name`, `contact`,`message`) VALUES ('$ownername','$ownernumber','$propertyid','$name','$contact','$message')");


            if ($is_insert == TRUE) {



              echo '<script>alert("Your form is received.We will contact you soon.")</script>';



              exit();
            }
          }

          ?>
          <div id="contact" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-3 py-5">

            <form method="post" action="#">
              <div class="form-group row">
                <label for="ownername" class="col-sm-2 col-form-label">Owner Name: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" name="ownername" id="ownername" value=" <?php echo $result['ownername']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="ownernumber" class="col-sm-2 col-form-label">Owner Email: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="ownernumber" name="ownernumber" value="<?php echo $result['ownernumber'];  ?>">
                </div>

              </div>
              <div class="form-group row">
                <label for="ownernumber" class="col-sm-2 col-form-label">Property Id: </label>
                <div class="col-sm-10">
                  <input type="number" readonly class="form-control-plaintext" id="propertyid" name="propertyid" value="<?php echo $result['id'];  ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Your name:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="text">
                </div>
              </div>
              <div class="form-group row">
                <label for="contact" class="col-sm-2 col-form-label">Contact Email:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="number">
                </div>
              </div>
              <div class="form-group">
                <label for="message">Message to Owner</label>
                <textarea class="form-control" id="message" name="message" rows="5"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary mb-2">Send</button></a>
            </form>
          </div>
        </div>
        <!-- End rounded tabs -->
      </div>
      <!--Major description part ends-->
    <?php
  }
    ?>

    <!--Footer Section begins-->
    <div class="flex"><?php include("footer.php"); ?></div>

    <!--Footer Section ends-->








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<?php


?>

</html>