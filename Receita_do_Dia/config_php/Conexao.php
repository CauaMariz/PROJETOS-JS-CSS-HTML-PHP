<?php 

$Local='localhost';
$User='root';
$Senha='';
$Banco='sessaologin';

$conexao=new mysqli($Local,$User,$Senha,$Banco);

if ($conexao->connect_error){
  echo "Erro de conexao";
}
