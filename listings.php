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
    <link rel="stylesheet" href="css/listings.css">

    <title>Listings</title>
</head>

<body>

    <!--Navbar Starting-->

    <div class="container">
        <nav class="navbar nav-pills fixed-top navbar-expand-lg bg-white">
            <a class="navbar-brand" href="index.php">Room Finder</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item current_page_item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="listings.php">Listings</a>
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



    <header>
        <div class="img-responsive  jumbotron jumbotron-image img-fluid mt-5" style="background-image: url('images/listingcover.jpg'); background-size:cover; max-width:100%; height:auto; object-fit:cover">
            <div class="flex">
                <h1 class="mt-5 pt-5">Looking for a property?</h1>
                <p class="headp pt-4">Searching your dream home made easy.</p>

            </div>

        </div>
        </div>

    </header>
    <div class="Available p-2">
        <h3 class="ml-3">
            <dt>Latest Properties in Nepal
            </dt>
        </h3>
        <a href="info.php?id=<?php echo $row['id']; ?>">
            <p class="float-right"><u><b>View all</b></u></p>
        </a>
        <p class="text-muted ml-3">The most recent real-estate right now.</p>

        <section class=" row listings mt-5">
            <?php

            $dbcon = mysqli_connect("localhost", "root", "", "roomkhoji");

            $selectquery = "select * from radioin";
            $query = mysqli_query($dbcon, $selectquery);
            // $result = mysqli_fetch_array($query);

            while ($result = mysqli_fetch_array($query)) {

            ?>
                <a href="<?php echo "info.php?id=" . $result["id"] ?>">
                    <div class="row ">

                        <div class="product-card col-lg-11 col-md-11 col-sm-11 container-fluid mx-4 px-4">
                            <div class="badge">Hot</div>
                            <div class="product-tumb img-fluid">
                                <img src="User/<?php echo
                                                $result['pic'];  ?>" alt="Listings" style="height:190px; width:100%">
                            </div>

                            <div class="product-details mt-3">
                                <span class="product-catagory">
                                    <h6><b><?php echo $result['title'];  ?>
                                </span></b></h6>
                                <p class="text-muted"><i class="fa fa-map-marker mr-2"></i><?php echo $result['address'];  ?>
                                </p>
                                <p class="text-muted"><i class="fa fa-map mr-2"></i><?php echo $result['area'];  ?></p>
                                <h6> NPR. <?php echo $result['price'];  ?></h6>
                            </div>

                        </div>

                    </div>
                </a>



            <?php
            }

            ?>

    </div>
    </section>

    <?php include("footer.php"); ?>





    <!--Bootstrap add-ons-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>