<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../style/style.css">

  <style>
    body {
      height: 100vh;
    }

    .PartePrincipal {
      height: 110%;
    }

    .imgBoloDeFubaHome {
      width: 330px;
      border-radius: 6px;

    }

    .TituloReceita1 {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: 500;
      padding-bottom: 5%;
    }

    .linkReceita1:hover {
      text-decoration: underline;
    }

    .linkReceita1 {
      position: relative;
      color: rgb(0, 119, 255);
      top: 6%;
    }

    .BannersHome {
      width: 935px;
      height: 520px;
      border-radius: 20px;
      overflow: hidden;
      position: absolute;
      left: 50%;
      top: 40vw;
      transform: translate(-50%, 50%);
      box-shadow: 1px 1px 6px 1px grey;
    }

    .slides {
      display: flex;
      width: 400%;
      height: 100%;
    }

    .slides input {
      display: none;
    }

    .imgs {
      width: 25%;
      transition: .6s;
    }

    .imgs img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .nav {
      position: absolute;
      bottom: 5px;
      left: 50%;
      transform: translate(-50%);
      display: flex;
    }

    .nav .navs {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 1px solid grey;
      margin: 6px;
      cursor: pointer;
      transition: .9s;
    }

    #radio-1:checked~.one {
      margin-left: 0;
    }

    #radio-2:checked~.one {
      margin-left: -25%;
    }

    #radio-3:checked~.one {
      margin-left: -50%;
    }

    .nav .navs:hover {
      background-color: aliceblue;
      border: 1px solid aliceblue;
    }

    .BarraLateral {
      box-shadow: 0 0 2px 0 rgba(128, 128, 128, 0.555);
    }

    .ReceitasHome2 {
      margin-top: 40vw;
      width: 100%;
      border: 1px solid rgb(255, 251, 251);
      justify-content: space-around;
    }

    .ReceitasHome2 div {
      justify-self: center;
    }

    @media (max-width: 1300px) {
      .BannersHome {
        width: 600px;
        height: 400px;
        top: 70vw;
      }

      .slides {
        display: flex;
        width: 490%;
        height: 100%;
      }
    }

    .BarraLateral {
      max-height: 100vw;
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
      padding-bottom: 1vw;
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
      padding-top: 2vw;
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

    .liLembrarDeMim {
      display: contents;
      float: left;
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
    <form class="Formulario" action="../config_php/ConfigLogin.php" method="post">

      <h2 class="TituloLogin">Login</h2>
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

      <div class="campoOpcoesLogin">
        <ul>
          <li class="liLembrarDeMim">
            <input type="checkbox" name="input" checked>
            <p class="lembrarDeMimLogin">Lembrar de mim</p>
          </li>

          <li>
            <a href="#" class="esqueceuSuaSenhaLogin">Esqueceu sua senha?</a>
          </li>
        </ul>
      </div>

      <button class="BtnLogin" type="submit">Entrar</button>
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
            <span href="#" class="esqueceuSuaSenhaLogin">Não tem uma conta?</span>
            <a href="cadastrar.php" style="color: yellowgreen;; font-weight:700">Sing-Up</a>
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