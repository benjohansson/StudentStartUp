
<?php
session_start();
session_unset();
session_destroy();
echo "Du loggas ut...";
echo "<script>setTimeout(\"location.href = 'http://localhost/grupp13/index.php';\",1000);</script>";
exit;
?>
