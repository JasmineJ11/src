<?php
//what to do with the form data
$title ="Your information";
include 'header.php';
$nimi = $_POST["nimi"];
$email= $_POST["email"];

echo "hello " . $nimi . " Your Email id is: " . $email;

include 'footer.php';
?>
