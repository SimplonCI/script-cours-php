<?php
//--------- YOUR MYSQL CONNECTION SETTINGS
$servername = "localhost";
$database = "prof";
$username = "root";
$password = "";
$datepost = date("Y-m-d");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo $server;
//mysqli_close($conn);
?>
