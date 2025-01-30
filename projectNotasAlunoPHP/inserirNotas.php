<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Notas</title>
  <style>
    input {
      display: block;
    }
  </style>
</head>

<body>

  <h3>Insira primeiramente o nome e idade do aluno</h3>

  <form action="<?='submitDados.php'?>" method="post">
    <label for="nomeAluno">Nome do Aluno</label>
    <input type="text" id="nomeAluno" placeholder="Nome do Aluno: " name="nomeAluno" required>
    <label for="idadeAluno">Idade Aluno</label>
    <input type="number" id="idadeAluno" placeholder="Idade do aluno: " name="idadeAluno" required>

    <label for="qntNotas">Quantide de notas</label>
    <input type="number" id="qntNotas" name="qntNotas" placeholder="Quantidade de notas: " required>

    <button type="submit">Enviar</button>
  </form>


</body>

</html>