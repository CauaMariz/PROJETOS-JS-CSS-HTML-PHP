<?php 
session_start();
require "Usuario.Class.php";
$email = filter_var($_POST['emailUser'] , FILTER_SANITIZE_EMAIL);
$senha = password_hash($_POST['senhaUser'], PASSWORD_DEFAULT);
$Usuario = new Usuario();
/*
function vrfcUser($conexao,$email): bool{
  $sql = $conexao->prepare("SELECT * FROM usuarios WHERE email = :e");
  $sql->bindValue(":e" , $email);
  $sql->execute();

  if ($sql->rowCount() > 0){
    return false;
  }
  else{
    return true;
  }
}
  */
if ($Usuario->checkUser($email) <= 0){
  if (!empty($email) && !empty($senha)){
    $Usuario->insrtUser($email,$senha);

    $_SESSION["email"] = $email;

    echo "<script>alert(\"Cadastro realizado com sucesso!\")</script>";
    echo "<script>location.href = 'home.php'</script>";
  }
}
else{
    echo "<script>alert(\"Tente usar outro email ou outra senha!\")</script>";
    echo "<script>location.href = 'home.php'</script>";
}