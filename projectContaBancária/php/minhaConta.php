<?php
include 'conexao.php';
session_start();
$email = $_SESSION['email'];
$sql = $conexao->prepare('SELECT nome FROM clientes WHERE email = ?');
$sql->bind_param('s', $email);
$sql->execute();
$result = $sql->get_result();
$linha = $result->fetch_assoc();
$nomeCliente = $linha['nome'];
$sql->close();
$conexao->close()
?>
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
      display: inline-flex;
      background-color: rgb(240, 196, 0);
      bottom: 0;
      position: absolute;
      justify-content: space-around;
      align-items: center;
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

    section {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      align-self: center;
      height: 80vh;
      width: 100%;
    }

    .login-container {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .form-group input:focus {
      border-color: #007bff;
      outline: none;
    }

    .btn {
      display: inline-block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .form-group2 span {
      color: rgb(51, 206, 51);
      font-weight: 600;
      font-size: 23px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .saldoConta {
      display: inline;
    }

    .containerFotoUser {
      display: flex;
      float: right;
      border-radius: 50%;
      box-shadow: 1px 1px 5px 1px grey;
    }

    .containerFotoUser img {
      width: 70px;
    }

    .bemVindo span {
      display: inline-flex;
      font-weight: 700;
      transition: .4s;
    }

    .bemVindo span:hover {
      transition: .4s;
      transform: translateX(5%);
    }
    .login-container h2>a{
      display: inline-flex;
      text-decoration: none;
      color: tomato;
      margin-top: 1vw;
    }
    .login-container h2>a:hover{
      text-decoration: underline;
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

    <div class="login-container">
      <div class="containerFotoUser">
        <img src="../assets/do-utilizador.png" alt="" class="fotoUser">
      </div>
      <h2>Sua conta</h2>
      <?php if (isset($_GET['error'])): ?>
        <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
      <?php endif; ?>
      <form action="" method="POST">
        <div class="form-group">
          <h2 class="bemVindo">Bem vindo (a) <span><?= $nomeCliente ?>!</span></h2>
        </div>
        <div class="form-group2">
          <h2 class="saldoConta">Saldo em conta: </h2>
          <span>R$ 0,00</span>
        </div>
        <div class="form-group2">
          <h2><a href="logout.php">Sair</a></h2>
        </div>
      </form>
      <a href="dadosUser.php"><button class="btn">Meus Dados</button></a>
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