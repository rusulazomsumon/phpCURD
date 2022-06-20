<?php
// MySQL connection
$dbServer = "localhost";
$dbUser = "root";
$dbPassword = "";
$database = "rasumon";

$conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $database) or 
die('Mysql Connection Error:' . mysqli_connect_error());