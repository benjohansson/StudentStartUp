<?php
/*http://stackoverflow.com/questions/2235434/how-to-generate-a-random-long-salt-for-use-in-hashing*/
$mysqli = new mysqli('dbtrain.im.uu.se', 'dbtrain_317', 'aldylb','dbtrain_317');
if ($mysqli-> connect_error)
  {
    die("Connection failed: ".$mysqli->connect_error);
  }
$inputEmail = isset ($_POST["logEmail"]) ? $_POST["logEmail"] : '';
$databaseEmail = "SELECT salt FROM registrate WHERE email = '$inputEmail'";
$result = $mysqli->query($databaseEmail);
$row = mysqli_fetch_row($result);
$salt = $row[0]; 

$password = isset ($_POST["logPassword"]) ? $_POST["logPassword"] : '';
$hashpassword = ("SELECT password FROM registrate WHERE email ='$inputEmail'");
$result2 = $mysqli->query($hashpassword);
$finalpassword = mysqli_fetch_array($result2);
$finalpassword = $finalpassword[0];

$checkpassword = md5($password . $salt);
$username = ("SELECT name FROM registrate WHERE email = '$inputEmail'");
$nameresult = $mysqli->query($username);
$nameaccess = mysqli_fetch_array($nameresult);

if($finalpassword == $checkpassword)
{
  session_start();
  $_SESSION['user'] = $inputEmail;
  $_SESSION['username'] = $nameaccess;
  echo "Du loggas in som: " . $inputEmail;
  echo "<script>setTimeout(\"location.href = 'homepage.php';\",1000);</script>";
}
else
{
  echo "Fel lösenord eller mail";
  echo "<script>setTimeout(\"location.href = 'login-process.php;\",1000);</script>";
}
?>
