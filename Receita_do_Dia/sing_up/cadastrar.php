<?php

include '../config_php/Conexao.php';

if (isset($_POST['submit'])) {
  $NomeUser = $_POST['NomeUser'];
  $Email = $_POST['Email'];
  $Senha = $_POST['Senha'];
  $Data = date('l jS \of F Y h:i:s A');
  if (empty($NomeUser) || empty($Senha) || empty($Email)) {
    echo "<script>alert('Preencha todos os campos!')</script>";
    echo "<script>location.href='cadastrar.php'</script>";
  } else {

    $sql = "INSERT INTO `usuarios`(`id`, `nome`, `email`, `usuario`, `senha`, `tipo`, `data`) VALUES ('','','$Email','$NomeUser','$Senha','','$Data')";

    $result = $conexao->query($sql);

    echo "<script>alert('Cadastro realizado com sucesso!')</script>";
    echo "<script>location.href='home.php'</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <link rel="stylesheet" href="../style/style.css">

  <style>
    body {
      height: 100vh;
    }

    .PartePrincipal {
      height: 100%;
    }

    .blocoUsuarioHeader {
      display: inline-flex;
      float: right;
      list-style: none;
      gap: 1vw;
    }

    .blocoUsuarioHeader li {
      margin: 0;
      padding: 0;
      margin-right: 2vw;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: center;
      font-weight: 600;
      transition: .6s;
      border-radius: 6px;
    }

    .blocoUsuarioHeader {
      display: flex;
      gap: 10px;
      list-style: none;
    }

    .blocoUsuarioHeader li {
      position: relative;
      overflow: hidden;
    }

    .blocoUsuarioHeader li a {
      display: block;
      padding: 10px 15px;
      position: relative;
      z-index: 1;
      color: black;
      text-decoration: none;
    }

    .blocoUsuarioHeader li::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: tomato;
      transform: scaleX(0);
      transform-origin: right;
      transition: transform 0.6s ease-in-out;
      z-index: 0;
    }

    .blocoUsuarioHeader li:hover::before {
      transform: scaleX(1);
      transform-origin: left;
    }

    .blocoUsuarioHeader li:hover a {
      color: white;
    }

    .menu {
      display: flex;
      margin: 0;
      padding: 0;
      margin-left: 8vw;
    }

    .Titulo {
      margin-left: 2vw;
    }

    .campoEmail {
      display: flex;
      padding-bottom: 2vw;
      justify-content: center;
    }

    .campoSenha {
      display: flex;
      padding-bottom: 2vw;
      justify-content: center;
    }

    .campoNomeUser {
      display: flex;
      padding-bottom: 2vw;
      justify-content: center;
    }

    .Formulario input {
      border-radius: 6px;
      padding: 12px;
      width: 300px;
      border: none;
      background-color: aliceblue;
    }

    .grupo-icon-login {
      display: flex;
      padding-top: .7vw;
    }

    .campoOpcoesLogin ul {
      list-style: none;
      display: inline-flex;
      width: 100%;
    }

    .campoOpcoesLogin input {
      width: 15px;
      float: left;
      margin-right: 2%;
    }

    .campoOpcoesLogin li {
      margin-left: 5vw;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      color: #242424;
      font-weight: 600;
    }

    .campoOpcoesLogin a {
      color: #242424;
      font-weight: 600;
    }

    .campoOpcoesLogin {
      display: flex;
      padding-bottom: 1vw;
    }

    .Formulario {
      height: auto;
      padding-bottom: 2vw;
      padding-top: 3vw;
    }

    .BtnLogin {
      display: flex;
      border-radius: 6px;
      padding: 9px;
      width: 300px;
      border: none;
      margin: 0 auto;
      justify-content: center;
      font-size: 20px;
      cursor: pointer;
      background-color: aliceblue;
      color: #242424;
      margin-bottom: 1vw;
    }

    .grupo-icon-login img {
      width: 40px;
    }

    .TituloLogin {
      font-size: 60px;
      text-align: center;
      padding-bottom: 2vw;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: 600;
      color: yellowgreen;
    }

    .campoContinuarGoogle {
      display: inline-flex;
      align-items: center;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      max-width: 300px;
      padding: 1% 0 1% 1%;
      border-radius: 10px;
      background-color: aliceblue;
      cursor: pointer;
    }

    .campoContinuarGoogle p {
      display: flex;
      margin-left: 2vw;
    }

    .campoContinuarGoogle img {
      width: 31px;
    }
  </style>

</head>

<body>
  <header class="cabecalho">
    <h2 class="Titulo" style="font-size: 28px;">R<span>e</span>ce<span style="color: rgb(238, 134, 36);">i</span>ta
      <span style="color: green;">d</span>o <span>D</span>i<span>a</span>
    </h2>

    <nav class="ParteCima">
      <ul class="menu">
        <li><a href="../home/home.php" class="MenuHome" style=" font-size: 19px;">Home</a></li>
        <li><a href="../more_recipe/MaisReceitas.php" class="MenuHome" style=" font-size: 19px;">Receitas</a></li>
        <li> <a href="../categories/categorias.php" class="MenuCategorias" style=" font-size: 19px;">Categorias</a></li>
        <li><a href="../more_recipe/PostarReceita.php" class="MenuPosteSuaReceita" style=" font-size: 19px;">Poste sua receita</a>
        </li>


      </ul>
    </nav>

    <div class="Icons">

      <?php

      if (isset($_SESSION['email']) && isset($_SESSION['senha']) && isset($_SESSION['usuario'])) {
        echo "<li><a href=\"../login/login.php\">Entrar</a></li>";
        echo "<a href='../config_php/Logout.php'>Sair</p>";
      }
      ?>
    </div>
    <div class="blocoUsuarioHeader">
      <li><a href="../sing_up/cadastrar.php">Crie sua conta</a></li>
      <li><a href="../login/login.php">Entrar</a></li>
    </div>
  </header>


  <section class="PartePrincipal">
    <form class="Formulario" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

      <h2 class="TituloLogin">Cadastro</h2>
      <div class="campoNomeUser">
        <input type="text" class="inputNomeUser" placeholder="Nome de usuário:" aria-label="Username" name="NomeUser" required>
      </div>

      <div class="campoEmail">
        <input type="email" class="inputEmail" placeholder="Email:" name="Email" required>
      </div>

      <div class="mb-3"></div>

      <div class="campoSenha">
        <input type="password" name="Senha" required class="inputSenha" placeholder="Senha:">
      </div>

      <button class="BtnLogin" type="submit">Criar conta</button>
      <div class="input-group mb-3"></div>
      <div class="input-group mb-3"></div>

      <div class="grupo-icon-login" onclick="location.href='#'">
        <div class="campoContinuarGoogle">
          <img src="../assets/imgs/icons8-google-logo-48.png" alt="">
          <p class="fraseContinuarGoogle">Continuar com Google</p>
        </div>
      </div>

      <div class="campoOpcoesLogin" style="padding:1vw 0 0 0">
        <ul>
          <li>
            <span class="esqueceuSuaSenhaLogin">Já tem uma conta?</span>
            <a href="login.php" style="color: yellowgreen;; font-weight:700">Sing-In</a>
          </li>
        </ul>
      </div>
    </form>
  </section>

  <footer class="Rodape">
    <div class="Bloco1">
      <h2 class="TituloBloco1">Ver mais</h2>
      <a href="" class="LinkBloco1">Contato</a>
      <a href="" class="LinkBloco2">Ajuda</a>
      <a href="" class="LinkBloco3">Saiba mais</a>
    </div>

    <div class="Bloco2">
      <h2 class="TituloBloco2">Fale conosco</h2>
      <a href="" class="LinkBloco1">Whatsapp</a>
      <a href="" class="LinkBloco2">Email</a>
      <a href="" class="LinkBloco3">Trabalhe com a gente</a>
    </div>

    <div class="Bloco3">
      <h2 class="TituloBloco3">Ajuda</h2>
      <a href="" class="LinkBloco1">Postagens</a>
      <a href="" class="LinkBloco2">Receitas</a>
      <a href="" class="LinkBloco3">Sua conta</a>
    </div>

    <div class="Bloco4">
      <h2 class="TituloBloco4">Nos siga nas redes</h2>
      <img src="../assets/imgs/icons8-instagram-48.png" alt="">
      <img src="../assets/imgs/icons8-facebook-novo-48.png" alt="">
      <img src="../assets/imgs/icons8-whatsapp-48.png" alt="">
    </div>
  </footer>
  
</body>

</html>