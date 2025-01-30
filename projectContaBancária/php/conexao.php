<?php

$local = 'localhost';
$senha = '';
$user = 'root';
$banco = 'clientes_banco_php';

$conexao = new mysqli($local,$senha,$user,$banco);

if ($conexao->error){
  echo "erro de conexao";
}
