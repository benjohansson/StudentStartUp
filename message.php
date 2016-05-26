<?php 
include 'connect.php'; 


$name = mysqli_real_escape_string($mysqli, $_GET["poster"]);
$annonsnum = mysqli_real_escape_string($mysqli, $_GET["annonsID"]);
$intrestedPerson = mysqli_real_escape_string($mysqli, $_GET["intrested"]);
$startchat = "INSERT INTO chatt (intrestedEmail, posterEmail, annonsID)
VALUES ('$intrestedPerson', '$name', '$annonsnum')";
$result = $mysqli->query($startchat);
 
$stmt = $mysqli->prepare ("SELECT id FROM chatt WHERE (chatt.intrestedEmail=? AND chatt.posterEmail=?)");
$stmt->bind_param("ss", $intrestedPerson,$name);
$stmt->execute(); 
$resultstmt = $stmt->get_result(); 
$finalresult = mysqli_fetch_array($resultstmt);
$finalresult = $finalresult[0];
echo $finalresult; 
 
$chattext = mysqli_real_escape_string($mysqli, $_GET['inputchat']);
$chatmessage="INSERT INTO message (chattID, chatMessage) VALUES ('$finalresult', '$chattext')"; 
$result =  $mysqli->query($chatmessage);
 
header("Location: myChats.php"); 

?>
