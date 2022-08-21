<?php
session_start();

if(isset($_SESSION['username'])){
    /*the php in above line checks loads the if fuction if the name of user below is not loaded*/
    echo "Login Again";
    header('location:user//dashboard.php');
    /*this header fuction loads back to the login page*/
}
?>

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
    <link rel="stylesheet" href="css/login.css">
    <title>Registration</title>
</head>

<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    /*above line connects the submit behaviour of button*/
  
    $email = $_POST['email'];
    $password = $_POST['password'];

    /*these two lines return the value inserted below in form*/


    $email_search = "select * from registration where email='$email'";
    $query = mysqli_query($con,$email_search);

    /*these two lines connect email searchin in local database*/

    $email_count = mysqli_num_rows($query);

    /*email count checks the email present in databse*/

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

    /*this line compares the email inserted to the one in database*/

        $db_pass = $email_pass['password'];

    /*this checks the password with the one in database*/


        $_SESSION['username'] = $email_pass['username'];
    /*this is for displaying name of user after login fetched by the session tag*/

        $pass_decode = password_verify($password, $db_pass);
    /*this verifies the password by the use of  function password_verify*/

        if($pass_decode){
            echo"Login Successful";
            ?>
            <script>
                location.replace("User/dashboard.php");
            </script>
            <?php
        }else
        echo "Password Incorrect !";
    
    }else{
        echo "Invalid Email";
    }

}


?>


    <section class="connect">
        <div class="container contact mb-5 pb-5">
            <div class= "shadow-lg row">
                
                    <div class="col-md-5">
                        <a href="index.php"><img src="images/logo.png" class="rounded mx-auto d-block"></a>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                    <p class="text-muted text-center mt-4" style="font-size:medium;">Get started with your free account.</p>
                        <div class="contact-form mt-5 mx-auto d-block ">
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            
                            <button class="button ml-3" type="submit" name="submit" id="submit"
                                value="Submit request"><span>login now</span></button>
                        </div>

                        <p class="text-muted mt-3 ml-5 pl-5"><   or Login via   ></p>
                            <div class="social mb-4 mx-auto d-block">
                                <a href="#" class="fa fa-2x fa-facebook"></a>
                                <a href="#" class="fa fa-2x fa-google"></a>
                            </div> 

                        <p> Don't have an account ?<a href="regis.php">Sign Up.<a>
                        
                         
                </div>
                <div class="col-md-7" style="background-image: url('images/contact.jpg');">
                    <div class="contact-info">
                        <h1 class="form-txt pt-1 pl-2 mb-5"
                            style="font-family: 'Lato', sans-serif; color: black; margin-top: 25%;">Join RoomFinder &<br>Find the perfect Property.
                        </h1>
                        <h5>Login to RoomFinder to catch up the best available property deals with genuine users in a most efficient way.</h5>

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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

</body>

</html>