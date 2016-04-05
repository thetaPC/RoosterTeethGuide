<?php
$servername = "localhost";
$username = "rtguide_user";
$password = "I7DS4L87d3X17EyXS";
$dbname = "rtguide_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully! <br>";

?>


