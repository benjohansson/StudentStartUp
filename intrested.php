<?php
//Om man inte är inloggad ska man komma till inloggningssidan
session_start();
if(!isset($_SESSION['user']))
{
  header("Location: http://localhost/grupp13/index.php");
}
else
{
?>
<head>
<title>Skicka</title> 
</head> 
<body>
	<?php
	$user = $_SESSION['user']; 
	$poster = $_GET['mail']; 
	$annonsID = $_GET['annons'];
	echo $poster; 
	
	echo'
	<div>
		<form action="message.php">
			<input type="text" id="poster" name="poster" value="'.$poster.'" readonly><br>
			<input type="text" id="annonsID" name="annonsID" value="'.$annonsID.'" readonly><br>
			<input type="text" id="intrested" name="intrested" value="'.$user.'" readonly ><br>
			
			<textarea rows="4" cols="50" name="inputchat" id="inputchat"></textarea><br>
			<input type="submit">		
		</form>
	</div>'	
	
	
	?>
	
</body>
<?php } ?>
