<?php

session_start();
include 'conexao.php';

if (empty($_POST['email']) || empty($_POST['password'])) {
  echo "<script>alert('É neceessário preencher todos os campos!')</script>";
  echo "<script>location.href = 'contaUser.php'</script>";
  exit;
} else {
  $email = $_POST['email'];
  $senha = $_POST['password'];

  $sql = $conexao->prepare("SELECT * FROM clientes WHERE email = ? AND senha  = ?");

  $sql->bind_param('ss', $email, $senha);
  $sql->execute();
  $result = $sql->get_result();

  if ($result->num_rows < 1) {
    echo "<script>alert('Credenciais inválidas!')</script>";
    echo "<script>location.href = 'contaUser.php'</script>";
  }
  else{
    $_SESSION['email'] = $email;
    echo "<script>alert('Login realizado com sucesso!')</script>";
    echo "<script>location.href = 'home.php'</script>";
  }
  $sql ->close();
  $conexao->close();
}
