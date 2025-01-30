
<?php 
echo "<script>alert('Voce saiu da sua conta.')</script>";
session_start();
session_unset();
session_destroy();
echo "<script>location.href = 'home.php'</script>";
exit;