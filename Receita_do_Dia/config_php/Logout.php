<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['email']);
unset($_SESSION['senha']);

session_destroy();

header('Location: ../home/home.php');
exit;