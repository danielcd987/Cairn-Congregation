<?php
/*
Most of this code is from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=4511s by  mmtuts who descibes how to create alogin system
this video has helped me learn some backend and how to create a webpage to connect a database to. There is some variations to the variable names
and table columns. 
*/

//servernames and database names needed to connect
$servername = "csinfo.cairn.edu";
$dBUsername = "dd288";
$dBPassword = "";
//$dBName = "dd288";
$dBName = "cairncongregationlogin";

//connects database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword,$dBName);


//alerts if the connectoin failed
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
