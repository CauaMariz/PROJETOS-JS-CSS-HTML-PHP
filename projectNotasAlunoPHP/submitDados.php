<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    input {
      display: block;
    }
  </style>
</head>

<body>
  <?php

  include 'conexao.php';
  session_start();

  $nomeAluno = $_POST['nomeAluno'];
  $idadeAluno = $_POST['idadeAluno'];
  $qntNotas = $_POST['qntNotas'];

  if (empty($nomeAluno) || empty($idadeAluno)) {
    echo "<script>alert('Insira todos os dados!')</script>";
    echo "<script>location.href='inserirNotas.html'</script>";
  } else {
    $sql = $conexao->prepare('INSERT INTO dados (nome, idade, id, notas,qntNotas) VALUES (?,?,NULL,NULL,?)');
    $sql->bind_param(
      'sii',
      $nomeAluno,
      $idadeAluno,
      $qntNotas
    );
    $sql->execute();
    if ($sql) {
      $_SESSION['nome'] = $nomeAluno;
      $_SESSION['qntNotas'] = $qntNotas;
      echo "<script>alert('Dados enviados com sucesso!')</script>";
      echo "<script>alert('Agora vamos inserir as notas!')</script>";
      echo "<script>location.href='inserirNotas2.php'</script>";
      
    } else {
      echo "<script>alert('Erro ao enviar os dados!')</script>";
      echo "<script>location.href='inserirMaisNotas.html'</script>";
    }

  }
  $sql->close();
  $conexao->close();
  ?>
</body>

</html>