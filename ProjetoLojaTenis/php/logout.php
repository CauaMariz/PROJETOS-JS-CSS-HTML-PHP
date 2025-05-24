<?php 
session_start();
unset($_SESSION['email']);
session_destroy();

echo "<script>location.href = 'home.php'</script>";
exit;