<?php
$servername= "localhost";
$username = "root";
$password = "";
$database "samplelogin";

// create connection
$con = new mysqli($servername, $username, $password, $database);

if*($conn -> connect_error){
  die("Connection failed" . $conn -> connect_error);
}

?>