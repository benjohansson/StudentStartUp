<?php 
session_start(); 
include 'connect.php'; 

$postID = mysqli_real_escape_string($mysqli, $_POST['postdelete_hidden']); 
$userMail = $_SESSION['user'];
$_POST['postdelete'];

if(isset($_POST['postdelete']))
{	
	$delete = "DELETE FROM annonsTable WHERE annonsTable.id='$postID'"; 
	$result = $mysqli->query($delete);	
	header("refresh:0; url = myadds.php"); 
	echo '<script type="text/javascript">alert("Posten tas bort");</script>';
}



?>
