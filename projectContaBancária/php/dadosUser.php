<?php
session_start();
include 'conexao.php';

$email = $_SESSION['email'];
$sql = $conexao->prepare('SELECT nome, nome_usuario, data_nascimento, cpf, email, senha FROM clientes WHERE email = ?');
$sql->bind_param('s', $email);
$sql->execute();
$result = $sql->get_result();
$linha = $result->fetch_assoc();
$nomeCliente = $linha['nome'];
$nomeUser = $linha['nome_usuario'];
$dataNascimento = $linha['data_nascimento'];
$cpf = $linha['cpf'];
$email = $linha['email'];
$senha = $linha['senha'];
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
    .menu {
      position: absolute;
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

    .login-container h2>a {
      display: inline-flex;
      text-decoration: none;
      color: tomato;
      margin-top: 1vw;
    }

    .login-container h2>a:hover {
      text-decoration: underline;
    }

    .senhaUser {
      opacity: 0;
      transition: .5s;
    }

    .showSenha {
      transition: .5s;
      opacity: 1;
    }

    .iconEye {
      display: inline-flex;
      width: 23px;
      cursor: pointer;
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
      <h2>Seus Dados</h2>

      <form action="" method="POST">
        <div class="form-group">
          <h2>Nome: <?= $nomeCliente ?></h2>
        </div>
        <div class="form-group">
          <h2>Nome de usuário: <?= $nomeUser ?></h2>
        </div>
        <div class="form-group">
          <h2>Data de nascimento: <?= $dataNascimento ?></h2>
        </div>
        <div class="form-group">
          <h2>CPF: <?= $cpf ?></h2>
        </div>
        <div class="form-group">
          <h2>Email: <?= $email ?></h2>
        </div>
        <div class="form-group">
          <h2>Senha: <span class="senhaUser"><?= $senha ?></span></h2>
          <img src="../assets/interface_13739846.png" alt="" class="iconEye" onclick="showSenha()">
        </div>
      </form>
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

  <script src="../js/scriptShowMenu.js"></script>
  <script src="../js/scriptShowSenha.js"></script>
</body>

</html>