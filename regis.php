<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts Link-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">




    <!--Fonts Link ends-->
    <link rel="stylesheet" href="css/registration.css">
    <title>Registration</title>
</head>

<body>
<?php


include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    /*the above line connects the data inserted in form and the mysquli_real_escape_string checks the value correctly*/


    $pass = password_hash($password,PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

    /*above two line do the hasing of password */

    $emailquery =" select * from registration where email='$email'";
    /*this above line selcts the email and the star function checks in database to stop repetation*/
    $query = mysqli_query($con,$emailquery);
    /*this executes the checking by establishing the connection estd in dbconfig file*/


    $emailcount = mysqli_num_rows($query);
    /*this checks for the email*/

    if($emailcount>0){
        echo "email already exists";

    }else{
        if($password === $cpassword){
        /*the above line checks for the confirmation of password and email to carry out coming data*/

            $insertquery ="insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";
            /*in above line insertquery inserts the data in the table resp. to the name provided*/

            $iquery = mysqli_query($con,$insertquery);

            /*iquery is basically insert query which estd the conection to carryout insertquery function*/

            if($iquery){
                ?>
            
                    <script>
                        alert("Insertion Successful.Welcome to the family.");
                    </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Oops!! Insertion failed please try again.");
                 </script>
                <?php
            
            }


        }else{
            echo "password not same";
        }
    }

}
?>
    <section class="connect">
        <div class="container contact mb-5 pb-5">
            <div class=" shadow-lg row">

                <div class="col-md-5">
                    <a href="index.php"><img src="images/logo.png" class="rounded mx-auto d-block"></a>
                    <form id="contact-form" method="post" action="#">
                        <p class="text-muted text-center mt-4" style="font-size:medium;">Create an account.</p>
                        <div class="contact-form mt-5 mx-auto d-block ">
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Full Name" name="username" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="phone" placeholder="Contact number" name="mobile" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm password" name="cpassword" required>
                                </div>
                            </div>

                            <button class="button ml-3" type="submit" name="submit" id="submit" value="Submit request"><span>Join us</span></button>
                        </div>
                        <p class="text-muted mt-3 ml-5 pl-5">
                            < or register via>
                        </p>
                        <div class="social mb-4 mx-auto d-block">
                            <a href="#" class="fa fa-2x fa-facebook"></a>
                            <a href="#" class="fa fa-2x fa-google"></a>
                        </div>
                        <p>Already have an account ?<a href="login.php">Login.<a>


                </div>
                <div class="col-md-7" style="background-image: url('images/contact.jpg');">
                    <div class="contact-info">
                        <h1 class="form-txt pt-1 pl-2 mb-5" style="font-family: 'Lato', sans-serif; color: black; margin-top: 25%;">Join now &<br>Catch-up properties on best value.</h1>
                        <h5>Join our family and make the best decisions about your real-estate.Enjoy the best service and experience the best value on property deals.</h5>

                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
                        <a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a>

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

</html>