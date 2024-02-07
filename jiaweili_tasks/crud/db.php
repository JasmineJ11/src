<?php

$servername = "web-dev-env-main-db-1";
$username = "app1";
$password = "password";
$dbname = "app1";

/*
$servername = "localhost";
$username = "jiawei23000";
$password = "tw7GuvLX";
$dbname = "wp_jiawei23000";
*/


//create database connection
$conn = new mysqli ($servername,$username,$password,$dbname);

//check connection
if ($conn -> connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>