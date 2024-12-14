<?php
session_start();
include 'Conexao.php';

$NomeUser = $_POST['NomeUser'];
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];
if (empty($NomeUser) || empty($Senha) || empty($Email)) {
  echo "<script>alert('Preencha todos os campos!')</script>";
  echo "<script>location.href='../login/login.php'</script>";
} else {

  $sql="SELECT * FROM usuarios WHERE email='$Email' AND senha='$Senha' AND usuario='$NomeUser'";

  $result=$conexao->query($sql);

  if (mysqli_num_rows($result) < 1){
    echo "<script>alert('Email, Nome de Usuário ou Senha errados!')</script>";
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['usuario']);
    echo "<script>location.href='../login/login.php'</script>";
  }
  else{
    $_SESSION['email']=$Email;
    $_SESSION['senha']=$Senha;
    $_SESSION['usuario']=$NomeUser;

    echo "<script>alert('Login realizado com sucesso!')</script>";
    echo "<script>location.href='../home/home.php'</script>";
  }
}
