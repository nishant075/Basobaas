<?php
$receiver = "dhunganabibek1@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there..user with this falano email is intrested in your property contact him/her yourself for further info..";
$sender = "From:bibek.dhungana.bca075@kathford.edu.np";
if (mail($receiver, $subject, $body, $sender)) {
    echo "Email sent successfully to $receiver";
} else {
    echo "Sorry, failed while sending mail!";
}
