<!doctype html>
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
  <link rel="stylesheet" href="css/contact.css">

  <title>Contact</title>
</head>

<body>

  <!--Navbar Starting-->

  <div class="container">
    <nav class="navbar nav-pills fixed-top navbar-expand-lg bg-white shadow">
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
            <a class="nav-link active" href="contact.php">Contact</a>
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
    </nav>


  </div>

  </div>



  <!--Google map-->
  <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px; z-index: 0;">
    <iframe src="https://maps.google.com/maps?q=kathfordcollege&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="margin-top: 4.9rem;" allowfullscreen></iframe>
  </div>

  <!--Google Maps-->


  <section class="connect">
    <div class="container contact mb-5 pb-5">
      <div class=" shadow-lg row">
        <div class="col-md-3" style="background: #222AF0;
        background: -webkit-linear-gradient(bottom right, #222AF0, #3F4D9E);
        background: -moz-linear-gradient(bottom right, #222AF0, #3F4D9E);
        background: linear-gradient(to top left, #222AF0, #3F4D9E);">
          <div class="contact-info">
            <h2 class="form-txt pt-5 pl-2" style="font-family: 'Poppins', sans-serif; color: white; margin-top: 31%;">Contact Us</h2>
            <p>332 Balkumari Road,Koteshwor</p>
            <p>+977 4652-387</p>
            <p>roomfinder@gmail.com</p>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f fa-2x"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-2x "></i></a>
            <a href="https://www.google.com/" target="_blank"><i class="fa fa-google fa-2x"></i></a>

          </div>
        </div>

        <?php

        try {

          $db = new mysqli("localhost", "root", "", "roomkhoji");
        } catch (Exception $exc) {
          echo $exc->getTraceAsString();
        }

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['msg'])) {

          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $msg = $_POST['msg'];



          $is_insert = $db->query("INSERT INTO `contact_form`( `name`, `email`, `phone`, `msg`) VALUES ('$name','$email','$phone','$msg')");


          if ($is_insert == TRUE) {



            echo '<script>alert("Your form is received.We will contact you soon.")</script>';



            exit();
          }
        }

        ?>
        <div class="col-md-9">
          <form id="contact-form" method="post" action="#">
            <div class="contact-form">

              <div class="form-group">
                <label class="control-label col-sm-2 pt-1" for="fname">Full Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="fname" placeholder="Your Name" name="name" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="Phone">Phone:</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="Phone" placeholder="Enter number" name="phone" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="comment">Comment:</label>
                <div class="col-sm-9">
                  <textarea name="msg" class="form-control" rows="5" id="comment" placeholder="Message" required></textarea>
                </div>
              </div>
              <button class="button" type="submit" name="submit" id="submit" value="Submit request"><span>Hire us</span></button>
            </div>
        </div>
      </div>
      </form>
    </div>
    </div>
    </div>







    <!--Bootstrap add-ons-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>