<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iníçio</title>
  <link rel="stylesheet" href="../style/style.css">
  <style>
    .BannersHome {
      width: 935px;
      height: 520px;
      border-radius: 20px;
      overflow: hidden;
      position: absolute;
      left: 52%;
      top: 5%;
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
      border: 2px solid grey;
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

    .menu {
      width: 0;
      height: 0;
      padding: 0;
      background-color: rgb(240, 196, 0);
      transition: .4s;
    }

    .menu ul {
      list-style: none;
    }

    .menu li {
      margin-bottom: 1vw;
    }

    .menu a {
      text-decoration: none;
      color: black;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .menu a:hover {
      text-decoration: underline;
    }

    .showMenu {
      transition: .4s;
      width: fit-content;
      height: fit-content;
      padding: 1vw;
      border-bottom-right-radius: 10px;
    }

    .minhaConta:hover {
      text-decoration: underline;
    }

    footer {
      width: 100%;
      height: auto;
      min-height: 5vw;
      display: flex;
      background-color: rgb(240, 196, 0);
      justify-content: space-around;
      align-items: center;
      margin-top: 110vh;
    }

    footer ul {
      list-style: none;
    }

    footer a {
      color: black;
      font-size: 17px;
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: none;
      line-height: 25px;
    }

    .ul2Footer {

      margin-left: 10vw;
    }


    @media (max-width:1100px) {
      footer a {
        font-size: 12px;
      }

      .BannersHome {
        width: 600px;
        height: 300px;
        left: 52%;
        top: 5%;
        transform: translate(-50%, 30%);
      }
    }

    @media (max-width: 700px) {
      footer a {
        font-size: 15px;
      }

      .BannersHome {
        width: 400px;
        height: 200px;
        left: 52%;
        top: 20%;
        transform: translate(-50%, 70%);
      }
    }

    @media (max-width:500px) {
      .BannersHome {
        width: 300px;
        height: 200px;
        left: 52%;
        top: 25%;
        transform: translate(-50%, 70%);
      }
    }

    @media (max-width:480px) {
      .BannersHome {
        width: 300px;
        height: 200px;
        left: 52%;
        top: 25%;
        transform: translate(-50%, 70%);
      }
    }

  </style>
</head>

<body>

  <header>
    <p class="iconMenu" onclick="showMenu()">&#9776;</p>
    <span class="barraSeparaMenu"></span>
    <p class="title">Banco PHP</p>

    <p class="nomeUser"></p>

    <ul class="listaItens">

      <?php
      session_start();
      if (empty($_SESSION['email'])) {
        echo '<li class="acesseSuaConta" onclick="location.href = \'contaUser.php\'">Acesse sua conta</li>';
        echo '<li class="cadastrase" onclick="location.href = \'cadastroUser.php\'">Cadastra-se</li>';
      } else {
        echo '<li class="minhaConta" onclick="location.href = \'minhaConta.php\'">Minha Conta</li>';
      }
      ?>
      <li class="iconLupa">&#128269;</li>
    </ul>
  </header>

  <div class="menu"></div>

  <section>
    <div class="BannersHome">
      <div class="slides">
        <input type="radio" name="radio" id="radio-1" checked>
        <input type="radio" name="radio" id="radio-2">
        <input type="radio" name="radio" id="radio-3">

        <div class="imgs one">
          <img src="../assets/Banner moda feminina bolsa e acessorios desconto (2).png" alt="">
        </div>
        <div class="imgs">
          <img src="../assets/Banner moda feminina bolsa e acessorios desconto.png" alt="">
        </div>

        <div class="imgs">
          <img src="../assets/Banner moda feminina bolsa e acessorios desconto (1).png" alt="">
        </div>

      </div>
      <div class="nav">
        <label for="radio-1" class="navs"></label>
        <label for="radio-2" class="navs"></label>
        <label for="radio-3" class="navs"></label>
      </div>
    </div>
    </div>
  </section>

  <footer>
    <ul>
      <li><a href="#">Sobre Nós</a></li>
      <li><a href="#">Carreiras</a></li>
      <li><a href="#">Blog</a></li>
    </ul>
    <ul class="ul2Footer">
      <li><a href="#">Central de Ajuda</a></li>
      <li><a href="#">Política de Privacidade</a></li>
      <li><a href="#">Termos de Serviço</a></li>
    </ul>
    <ul>
      <li><a href="#">Fale Conosco</a></li>
      <li><a href="#">Perguntas Frequentes</a></li>
      <li><a href="#">Suporte</a></li>
    </ul>
  </footer>

  <script src="../js/scriptTrocaImgHome.js"></script>
  <script src="../js/scriptShowMenu.js"></script>
</body>

</html>