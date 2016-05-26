<?php
$servername = "dbtrain.im.uu.se";
$username = "dbtrain_317";
$password = "aldylb";
$databas = "dbtrain_317";
// Create connection
$conn = new mysqli($servername, $username, $password,$databas);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
