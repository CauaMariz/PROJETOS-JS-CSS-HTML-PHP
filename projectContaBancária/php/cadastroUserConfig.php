<?php
include 'conexao.php';
$dataNasc = $_POST['dataNasc'];
$newDataNasc = new DateTime($dataNasc);
$dataAtual = new DateTime();
$idadeUser = $newDataNasc->diff($dataAtual);

if (empty($_POST['nome']) || empty($_POST['nomeUser']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['dataNasc']) || empty($_POST['cpf'])) {
  echo "<script>alert('É neceessário preencher todos os campos!')</script>";
  echo "<script>location.href = 'cadastroUser.php'</script>";
  exit;
} else  if ($idadeUser->y < 18) {
  echo "<script>alert('Voce precisa ter pelo menos 18 anos!')</script>";
  echo "<script>location.href = 'cadastroUser.php'</script>";
} else {
  $nome = $_POST['nome'];
  $nomeUser = $_POST['nomeUser'];
  $email = $_POST['email'];
  $senha = $_POST['password'];
  $cpf = $_POST['cpf'];
  $dataCadastro = date('Y-m-d');

  $sql = $conexao->prepare("INSERT INTO `clientes`(`ID`, `nome`, `nome_usuario`, `data_nascimento`, `cpf`, `data_cadastro`, `valor_em_conta`, `email`, `senha`) VALUES (NULL,?,?,?,?,?,NULL,?,?)");

  if (!$sql) {
    echo "Erro ao cadastrar!" . $conexao->error;
    echo "<script>location.href = 'cadastroUser.php'</script>";
  }
  $sql->bind_param('sssisss', $nome, $nomeUser, $dataNasc, $cpf, $dataCadastro, $email, $senha);

  $pesquisa = $conexao->prepare("SELECT * FROM clientes WHERE nome_usuario = ? OR cpf = ? OR email = ?");

  $pesquisa->bind_param('sis', $nomeUser, $cpf, $email);
  $pesquisa->execute();
  $result = $pesquisa->get_result();

  if ($result->num_rows > 0) {
    echo "<script>alert('Estes dados ja estao sendo utilizados!')</script>";
    echo "<script>location.href = 'cadastroUser.php'</script>";
  } else {

    $sql->execute();

    if ($sql) {
      echo "<script>alert('Cadastro realizado com sucesso!')</script>";
      echo "<script>location.href = 'home.php'</script>";
    } else {
      echo "Erro ao cadastrar!" . $conexao->error;
      echo "<script>location.href = 'cadastroUser.php'</script>";
    }
  }
  $sql->close();
  $conexao->close();
  $pesquisa->close();
}
