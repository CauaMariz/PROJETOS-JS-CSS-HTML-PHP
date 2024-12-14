<?php session_start();  ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receita do Dia</title>


  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../style/style.css">
  <style>
    .cabecalho {
      position: fixed;
      width: 100%;
      background-color: rgb(255, 251, 251);
      z-index: 1000;
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

    .iconPerson {
      width: 45px;
      margin-right: 2vw;
      cursor: pointer;
    }

    .menuPerson {
      position: fixed;
      right: 0;
      transition: .4s;
      height: 0;
      width: 0;
      margin-top: -.4vw;
      background-color: rgb(255, 251, 251);
      border-bottom-left-radius: 10px;
      box-shadow: 1px 1px 5px 1px grey;
      border-top-style: none;
      z-index: 999;
      align-items: center;
      justify-content: center;
    }

    .showMenuPerson {
      height: 15vw;
      width: 8vw;
      transition: .4s;
    }

    .PartePrincipal {
      align-items: center;
    }

    .menuPerson>button {
      display: flex;
      padding: 1vw 1vw 1vw 0;
      margin-top: 1.3vw;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      width: 150px;
      height: 20px;
      align-items: center;
      text-align: center;
      justify-content: start;
      border-radius: 3px;
      border: none;
      cursor: pointer;
      background-color: rgba(255, 251, 251, 0);
    }

    .menuPerson>button>img {
      width: 25px;
      margin-left: .3vw;
    }

    .menuPerson>button:hover {
      color: rgb(241, 0, 0);
    }

    .PartePrincipal {
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid red;
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

    <div class="blocoUsuarioHeader">
      <li><a href="../sing_up/cadastrar.php">Crie sua conta</a></li>
      <li><a href="../login/login.php">Entrar</a></li>
    </div>
    <div class="Icons">

      <?php

      if (isset($_SESSION['email']) && isset($_SESSION['senha']) && isset($_SESSION['usuario'])) {
        echo " <img src=\"../assets/imgs/person-crop-circle-fill-svgrepo-com.svg\" alt=\"\" class=\"iconPerson\" onclick=\"seeMenu()\">";

        echo
        "<script>
          let campoUser = document.querySelector('.blocoUsuarioHeader');
          campoUser.style.display = 'none';
        </script>";
      }
      ?>
    </div>

  </header>


  <section class="PartePrincipal">
    <div class="BannersHome">
      <div class="slides">
        <input type="radio" name="radio" id="radio-1" checked>
        <input type="radio" name="radio" id="radio-2">
        <input type="radio" name="radio" id="radio-3">

        <div class="imgs one">
          <img src="../assets/imgs/1.png" alt="">
        </div>
        <div class="imgs">
          <img src="../assets/imgs/2.png" alt="">
        </div>
        <div class="imgs">
          <img src="../assets/imgs/2.png" alt="">
        </div>
      </div>

      <div class="nav">
        <label for="radio-1" class="navs"></label>
        <label for="radio-2" class="navs"></label>
        <label for="radio-3" class="navs"></label>
      </div>

    </div>
  </section>

  <div class="menuPerson">
    <button class="logoutMenuPerson" onclick="location.href='../config_php/Logout.php'">
      <img src="../assets/imgs/settings-gear-configuration-svgrepo-com.svg" alt="">
      Configurações
    </button>
    <button class="logoutMenuPerson" onclick="location.href='../config_php/Logout.php'">
      <img src="../assets/imgs/heart-svgrepo-com.svg" alt="">
      Favoritos
    </button>
    <button class="logoutMenuPerson" onclick="location.href='../config_php/Logout.php'">
      <img src="../assets/imgs/smartphone-svgrepo-com.svg" alt="" style="width:28px;margin-left:3%">
      Meus Posts
    </button>
    <button class="logoutMenuPerson" onclick="location.href='../config_php/Logout.php'">
      <img src="../assets\imgs\logout-1-svgrepo-com.svg" alt="" class="iconLogout">
      Sair da conta
    </button>
  </div>



  <div class="ReceitasHome2">
    <h2 class="TitleReceitasHome">Receitas em alta</h2>
    <div class="Receita1">
      <h3 class="TituloReceita1">Bolo de fuba</h3>

      <img src="../assets/imgs/pexels-catscoming-1359320.jpg" alt="" class="imgBoloDeFubaHome">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita2">
      <h3 class="TituloReceita1">Guacamole</h3>
      <img src="../assets/imgs/pexels-rdne-5737580.jpg" alt="" class="imgBoloDeFubaHome">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita3">
      <h3 class="TituloReceita1">Suco verde</h3>
      <img src="../assets/imgs/green-juice-769129.jpg" alt="" class="imgBoloDeFubaHome">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita4">
      <h3 class="TituloReceita1">Macarrao Italiano</h3>
      <img src="../assets/imgs/pasta-3547078.jpg" alt="" class="imgBoloDeFubaHome" style="height:220px;">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita5">
      <h3 class="TituloReceita1">Feijoada Brasileira</h3>
      <img src="../assets/imgs/beans-and-pork-8763933.jpg" alt="" class="imgBoloDeFubaHome" style="height:220px;">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita6">
      <h3 class="TituloReceita1">Cookies Americanos</h3>
      <img src="../assets/imgs/pexels-nord6-1775283.jpg" alt="" class="imgBoloDeFubaHome" style="height:220px;">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita7">
      <h3 class="TituloReceita1">Macarons</h3>
      <img src="../assets/imgs/pexels-brigitte-tohm-36757-239578.jpg" alt="" class="imgBoloDeFubaHome" style="height:220px;">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
    <div class="Receita8">
      <h3 class="TituloReceita1">Salada Caprese</h3>
      <img src="../assets/imgs/pexels-nano-erdozain-120534369-28841126.jpg" alt="" class="imgBoloDeFubaHome" style="height:220px;">
      <a href="MaisReceitas.php" class="linkReceita1">Ver Receita</a>
    </div>
  </div>


  <script src="../java_script/script.js"></script>

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

  <script src="../java_script/scriptMenu.js"></script>
</body>

</html>