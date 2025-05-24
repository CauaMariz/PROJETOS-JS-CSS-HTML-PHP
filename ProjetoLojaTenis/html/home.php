<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    html,
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      flex-direction: column;
      height: 100%;
      display: flex;
    }

    .pag {
      flex: 1;
    }

    .cabecalho {
      display: flex;
      background-color: rgb(255, 240, 24);
      line-height: normal;
      align-items: center;
      box-shadow: 1px 1px 10px 1px rgba(34, 34, 34, 0.336);
      justify-content: center;
    }

    .cabecalho h1 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    ul {
      display: flex;
      list-style: none;
      display: inline-flex;
    }

    li {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin-left: 5vh;
      font-weight: 600;
      transition: .5s;
      font-size: 18px;
      padding: 5px;
      border-radius: 8px;
    }

    li:hover {
      transition: .5s;
      background-color: rgb(34, 34, 34);
      cursor: pointer;
      border-radius: 8px;
      padding: 5px;
      color: rgb(255, 240, 24);
    }

    .bloco {
      position: relative;
      float: right;
    }

    .imgTenis {
      position: relative;
      width: 200px;
      rotate: -20deg;
      top: -.5vh;
      right: 7vh;
    }

    .btnMenu {
      position: absolute;
      right: 1vh;
      font-size: 30px;
      display: none;
      cursor: pointer;
    }

    @media (max-width: 1200px) {
      .footer li {
        font-size: 15px;
      }
    }

    @media (max-width: 900px) {
      .footer li {
        font-size: 12px;
      }
    }

    @media (max-width: 760px) {
      .footer li {
        font-size: 10px;
      }
    }

    @media (max-width: 550px) {
      .footer li {
        font-size: 7px;
      }
    }

    @media (max-width: 690px) {
      .cabecalho li {
        font-size: 15px;
      }
    }

    @media (max-width: 490px) {
      .imgTenis {
        width: 100px;
      }
    }

    @media (max-width:300px) {
      .imgTenis {
        right: 3vh;
        width: 80px;
      }
    }

    @media (max-width: 650px) {
      .cabecalho ul {
        display: none;
      }

      .btnMenu {
        display: flex;
      }
    }

    @media (min-width: 650px) {
      .menu {
        display: none;
      }
    }

    .menu {
      position: absolute;
      background-color: rgb(255, 240, 24);
      right: 0;
      border-radius: 0 0 10px 10px;
      overflow: hidden;
      font-size: 16px;
      text-decoration: none;
      list-style: none;
      padding-bottom: 1vw;
    }

    .menu li {
      display: flex;
      margin-left: 2vw;
    }

    .showMenu {
      transition: .5s;
      width: 140px;
      height: 170px;
    }

    .exclMenu {
      transition: .5s;
      width: 0;
      height: 0;
    }

    .footer {
      display: inline-flex;
      height: auto;
      min-height: 80px;
      bottom: 0;
      width: 100%;
      flex-shrink: 0;
      background-color: rgb(255, 240, 24);
      justify-content: space-between;
      margin-top: 10vh;
      align-content: space-around;
    }

    .footer ul {
      list-style: none;
      display: inline-block;
      align-content: space-between;
      margin-left: -5vw;
    }

    .footer a {
      color: black;
      text-decoration: none;
    }

    .footer li:hover {
      a {
        color: rgb(255, 240, 24);
      }
    }
    .title{
      cursor: pointer;
    }
    .mainSection{
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }
    .imgTenisHome{
      display: flex;
      width: 60vw;
      max-height: 65vh  ;
      height: auto;
      align-self: center;
      
    }
  </style>
</head>

<body>

  <div class="pag">
    <header class="cabecalho">
      <h1 class="title" onclick="location.href = 'home.php'">Tenis BR</h1>
      <ul>
        <li>Ver Mais</li>
        <li onclick = "location.href = 'loginPag.php'"  >Login</li>
        <li onclick = "location.href = 'cadastroPag.php'">Cadastrar</li>
        <li>Configurações</li>
        <li>Sair</li>
      </ul>

      <div class="btnMenu" onclick="showMenu()">&#9776;

      </div>

    </header>
    <div class="bloco">
      <img src="../assets/ChatGPT Image 2 de abr. de 2025, 19_41_23.png" alt="" class="imgTenis">
    </div>

    <div class="menu">
      <li>Ver Mais</li>
      <li onclick = "location.href = 'loginPag.php'"  >Login</li>
      <li onclick="location.href = 'cadastroPag.php'">Cadastrar</li>
      <li>Configurações</li>
      <li>Sair</li>
    </div>

    <section class="mainSection">
      <img src="../assets/imgTenis.jpg" alt="" class = "imgTenisHome">
    </section>

  </div>

  <footer class="footer">
    <ul style="margin-left:-1vw;">
      <li><strong>Institucional</strong></li>
      <li><a href="#">Sobre nós</a></li>
      <li><a href="#">Trabalhe conosco</a></li>
      <li><a href="#">Política de privacidade</a></li>
    </ul>

    <ul>
      <li><strong>Ajuda</strong></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Fale conosco</a></li>
      <li><a href="#">Trocas e devoluções</a></li>
    </ul>

    <ul>
      <li><strong>Serviços</strong></li>
      <li><a href="#">Entrega</a></li>
      <li><a href="#">Rastreamento de pedido</a></li>
      <li><a href="#">Garantia</a></li>
    </ul>

    <ul>
      <li><strong>Redes Sociais</strong></li>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">YouTube</a></li>
    </ul>

    <ul>
      <li><strong>Formas de Pagamento</strong></li>
      <li>Pix</li>
      <li>Cartão de Crédito</li>
      <li>Boleto Bancário</li>
    </ul>
  </footer>

  <script src="../scripts/scriptHome.js"></script>
</body>

</html>