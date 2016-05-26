<?php 
$userMail = $_SESSION['user'];
include 'connect.php';
$stmt = $mysqli->prepare("SELECT profilepicture FROM registrate WHERE email=?");
$stmt->bind_param("s", $userMail); 
$stmt->execute(); 
$result = $stmt->get_result(); 
$finalresult = mysqli_fetch_array($result); 
$finalresult = $finalresult [0]; 


?>
