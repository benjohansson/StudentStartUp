<?php 
include 'connect.php'; 

$required = array('namn', 'rubrik', 'usertext', 'kategori'); 
foreach ($required as $inputs)
{
	if(!isset($_POST[$inputs]) || empty($_POST[$inputs]))
	{
		header("refresh:0; url = homepage.php"); 
		echo '<script type="text/javascript">alert("Data saknas!");</script>'; 
		return false; 
	}
}
 $name = mysqli_real_escape_string($mysqli, $_POST["namn"]);
 $header = mysqli_real_escape_string($mysqli, $_POST["rubrik"]);
 $text = mysqli_real_escape_string($mysqli, $_POST["usertext"]);
 $email= mysqli_real_escape_string($mysqli, $_POST["useremail"]);
 $kategori = mysqli_real_escape_string($mysqli, $_POST["kategori"]);
 $addsql = "INSERT INTO annonsTable (namn, rubrik, annons,email, categoryID)
 VALUES ('$name', '$header', '$text','$email', '$kategori')";
 $result = $mysqli->query($addsql);
 header("Location:http://localhost/grupp13/homepage.php");


?>
