<?php
$local = 'localhost';
$user = 'root';
$senha = '';
$banco = 'dados_alunos';

$conexao = new mysqli($local,$user,$senha,$banco);

if ($conexao->connect_error){
  echo "erro de conexao";
}