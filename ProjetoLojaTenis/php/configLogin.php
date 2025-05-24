<?php
session_start();

require("conexao.php");

function verificaUser($conexao, $email , $senha): bool
{
  
  $sql = $conexao->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s");
  $sql->bindValue(":e" , $email);
  $sql->bindValue(":s",$senha);
  $sql->execute();

  if ($sql->rowCount() > 0){
    return true;
  }
  return false;
}

$email = trim($_POST['emailUser']);
$senha = trim($_POST["senhaUser"]);

if (empty($email) || empty($senha)) {
  echo "<script>alert(\"É necessário inserir o email e a senha!\")</script>";
  echo "<script>location.href = 'loginScreen.php'</script>";
  exit;
} else if (strpos($email, " ") !== false || strpos($senha, " ") !== false) {
  echo "<script>alert(\"O email e a senha não podem conter espaços!\")</script>";
  echo "<script>location.href = 'loginScreen.php'</script>";
  exit;
} else {
  if (verificaUser($conexao, $email, $senha) == false) {
    echo "<script>alert(\"O email ou a senha estão errados\")</script>";
    echo "<script>location.href = 'loginScreen.php'</script>";
    exit;
  } else {
    $_SESSION["email"] = $email;
    echo "<script>alert(\"Login realizado com sucesso!\")</script>";
    echo "<script>location.href = 'home.php'</script>";
  }
}
