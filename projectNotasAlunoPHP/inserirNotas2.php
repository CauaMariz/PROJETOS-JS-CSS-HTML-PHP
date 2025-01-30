<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include 'conexao.php';
  
  echo "<form action = '' method = 'post'>";
  for ($controle = 1; $controle <= $SESSION['qntNotas']; $controle++) {
    echo "<input type = 'number' placeholder = 'Insira a $controle nota: ' name = 'notas[]'>";
  }
  echo "<button type = 'submit'>Enviar</button>";
  echo "</form>";

  if (isset($_POST['nota'])) {
    $notas = $_POST['notas'];

    $sql = $conexao->prepare('INSERT INTO notas (nome_aluno, nota) VALUES (?, ?)');

    foreach ($notas as $nota) {
      $sql->bind_param('si', $aluno->nomeAluno, $nota);
      $sql->execute();

      if ($sql) {
        echo "<script>alert('Dados enviados com sucesso!')</script>";
      }
    }
  }
  $sql->close();
  ?>
</body>

</html>