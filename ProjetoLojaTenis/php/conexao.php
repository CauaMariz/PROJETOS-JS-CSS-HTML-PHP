<?php

$local = 'mysql:host=localhost;dbname=sessaologins';
$user = 'root';
$pass = '';

try {
  $conexao = new PDO($local, $user, $pass);
  echo "Conectado!";
} catch (Throwable $e) {
  echo "Conexao mal sucedida!" . $e->getMessage();
}
