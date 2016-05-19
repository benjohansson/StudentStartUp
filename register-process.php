<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'projektarbete');

if ($mysqli-> connect_error)
  {
    die("Connection failed: ".$mysquli->connect_error);
  }
  //Validering av mail och lösenord
  //http://stackoverflow.com/questions/18305258/display-message-before-redirect-to-other-page
  $required  = array('regnamn', 'regmail', 'reglösenord', 'valLösen');
  foreach ($required as $field)
  {
    if (!isset($_POST[$field]) || empty($_POST[$field]))
    {
      echo ("Data saknas: ".$field);
      echo "<script>setTimeout(\"location.href = 'http://localhost:8888/projektarbete/';\",3000);</script>";
      return false;
    }
  }

  $email = $_POST["regmail"];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    header("Location: http://localhost:8888/projektarbete/");
    return false;
  }
  //Endast en email-adress får existera.
  $email = $_POST["regmail"];
  $mailDB = "SELECT email FROM registrate";
  $result = $mysqli->query($mailDB);
  $mailValues = mysqli_fetch_array($result);

  foreach ($mailValues as $values)
  {
    if ($values == $email)
    {
      echo ("There is already a user with this email address!");
      echo "<script>setTimeout(\"location.href = 'http://localhost:8888/projektarbete/';\",3000);</script>";
      return false;
    }
  }
  //Lösenorden måste matcha
  $passwordOne = $_POST["reglösenord"];
  $passwordTwo = $_POST["valLösen"];
  if($passwordOne != $passwordTwo)
  {
    //echo '<script type="text/javascript">alert("Lösenorden matchar inte!");</script>';
    header("refresh:0; url = index.php");
    echo '<script type="text/javascript">alert("Lösenorden matchar inte!");</script>';
    return false;
  }

  //Hash och salt
  $name = $_POST["regnamn"];
  $email = $_POST["regmail"];
  $password = $_POST["reglösenord"];
  $salt = rand_string(15);
  $hash = md5($password . $salt );

  $addsql = "INSERT INTO registrate (name, email, password, salt)
  VALUES ('$name', '$email', '$hash', '$salt')";
  $result = $mysqli->query($addsql);

  /*Skapar en random string till lösenordet, salt*/
    function rand_string($length)
    {
      $chars = "abcdefghijklmnopqrstuvWxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $size = strlen($chars);
      $str = "";
      for ($i = 0; $i < $length; $i++)
      {
        $str .= $chars[rand (0, $size - 1)];
      }
      return $str;
    }
    echo "Registrering lyckades!";
    echo "<script>setTimeout(\"location.href = 'http://localhost:8888/projektarbete/index.php';\",1000);</script>";
?>
