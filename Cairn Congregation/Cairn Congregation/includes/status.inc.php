<?php
include "includes/dbh.inc.php"; //includes DB connection
$userid =  $_SESSION['userId'];
$feeling = $_POST['userstatus'];


$sql = "UPDATE users SET stats = $feeling WHERE id_user =  '$userid';"; 
mysqli_query($conn, $sql);

header("Location: ../profile.php?feelingsubmitted");


