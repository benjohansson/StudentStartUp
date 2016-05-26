<?php 
session_start(); 
include 'connect.php'; 

$url = mysqli_real_escape_string($mysqli, $_POST['geturl']); 

$mail= mysqli_real_escape_string($mysqli, $_SESSION['user']);

$urlinsert = "UPDATE registrate SET profilepicture='$url' WHERE registrate.email = '$mail'";

$result = $mysqli->query($urlinsert); 

header("refresh:0; url = myprofile.php"); 
echo '<script type="text/javascript">alert("Du har bytt profilbild")</script>';



?>
