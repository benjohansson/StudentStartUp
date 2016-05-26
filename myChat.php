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
	<title>Chat</title> 
</head> 
	<body>
		<?php 
		include 'connect.php';
		
		$user = $_SESSION['user']; 
		$textcontent = "SELECT chatMessage FROM message, chatt WHERE (message.chattID=chatt.id AND chatt.intrestedEmail='$user') OR chatt.posterEmail='$user'";
		//(chatt, message) WHERE ('$user'=chatt.intrestedEmail OR '$user'=chatt.posterEmail) AND chatt.annonsID=message.chattID";
		$result = $mysqli->query($textcontent); 
		
		while($row = $result->fetch_assoc())
		{
			echo '<p>'.$row['chatMessage'].'</p>'; 
		}
		
		?>
	
	</body>
<?php } ?>
