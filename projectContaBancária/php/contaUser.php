<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iníçio</title>
  <link rel="stylesheet" href="../style/style.css">
  <style>
    body{
      background-color: #f0f2f5;
    }
    .menu{
      position: fixed;
      width: 0;
      height: 0;
      padding: 0;
      background-color: rgb(240, 196, 0);
      transition: .4s;  
    }
    .menu ul{
      list-style: none;
    }
    .menu li{
      margin-bottom: 1vw;
    }
    .menu a{
      text-decoration: none;
      color: black;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .menu a:hover{
      text-decoration: underline;
    }
    .showMenu{
      transition: .4s;
      width: fit-content;
      height: fit-content;
      padding: 1vw;
      border-bottom-right-radius:10px;
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
    footer{
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
    footer ul{
      list-style: none;
    }
    footer a{
      color: black;
      font-size: 17px;
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: none;
      line-height: 25px;
    }
    .ul2Footer{
  
      margin-left: 10vw;
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
      <li class="acesseSuaConta" onclick="location.href = 'contaUser.php'">Acesse sua conta</li>
      <li class="cadastrase" onclick="location.href = 'cadastroUser.php'">Cadastra-se</li>
      <li class="iconLupa">&#128269;</li>
    </ul>
  </header>

    <div class="menu"></div>

  <section>
  <div class="login-container">
    <h2>Login</h2>
    <?php if (isset($_GET['error'])): ?>
      <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif;?>
    <form action="login.php" method="POST">
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Entrar</button>
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

  <script src="../js/scriptTrocaImgHome.js"></script>
  <script src="../js/scriptShowMenu.js"></script>
</body>

</html>