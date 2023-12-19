<?php
    
  
    error_reporting(E_ALL ^ E_WARNING);
    $servername = "localhost";
$username = "root";
$password = ""; // Make sure the password is correct
$dbname = "crud";
$con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>

 
  
