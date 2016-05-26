<?php 
$servername = "dbtrain.im.uu.se";
$username = "dbtrain_317";
$password = "aldylb"; 
$dbname = "dbtrain_317";

$mysqli = new mysqli($servername, $username, $password,$dbname);
if ($mysqli-> connect_error)
  {
    die("Connection failed: ".$mysqli->connect_error);
  }
?>
