<?php
$servername = "localhost";
$username = "root";
$password = "";
$basedatos = "smartwifi";

// Create connection
$conn = new mysqli($servername, $username, $password, $basedatos);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully";*/
?>
