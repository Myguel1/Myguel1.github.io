<?php

// Database Configuration

$dbHost = "localhost";
$dbUser = "id19580249_faucethub";
$dbPW = "@O+r2]rlHJi?%W(9";
$dbName = "id19580249_faucethubb";

// Establish connection

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPW, $dbName);

// Check connection
if(mysqli_connect_errno()){
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Website

$Website_Url = "https://faucethubb.000webhostapp.com/";

?>