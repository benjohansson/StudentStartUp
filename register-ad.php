<?php
  $mysqli = new mysqli('localhost', 'root', 'root', 'projektarbete');

  if ($mysqli-> connect_error)
    {
      die("Connection failed: ".$mysquli->connect_error);
    }

  $name = mysqli_real_escape_string($mysqli, $_POST["namn"]);
  $header = mysqli_real_escape_string($mysqli, $_POST["rubrik"]);
  $text = mysqli_real_escape_string($mysqli, $_POST["usertext"]);

  $addsql = "INSERT INTO annonsTable (namn, rubrik, annons)
  VALUES ('$name', '$header', '$text')";
  $result = $mysqli->query($addsql);

  header("Location: http://localhost:8888/projektarbete/homepage.php");
?>
