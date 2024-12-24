<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="dropme_db";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

//$conn = new mysqli("localhost","root","","dropme_db");

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "<script>console.log('Successful')</script>";
?>