<?php
session_start();
session_unset();
session_destroy();

echo "Du loggas ut...";
echo "<script>setTimeout(\"location.href = 'http://localhost:8888/projektarbete/';\",1000);</script>";
exit;
?>
