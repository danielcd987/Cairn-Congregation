<?php
//servernames and database names needed to connect
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "cairncongregationlogin";

//connects database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword,$dBName);


//alerts if the connectoin failed
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}