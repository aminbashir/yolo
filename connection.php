<?php
//creating variables to enable database connection
$server="localhost";
$username="abdi";
$password="password";
$database="portfolio";

// Create connection and Checking if the connection was succesfull
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
};

?>
