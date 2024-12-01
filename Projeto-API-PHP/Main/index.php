<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    header img {
      position: absolute;
      left: 10%;
    }

    .bloco1,
    .bloco2,
    .bloco3 {
      width: auto;
      max-width: 300px;
      height: auto;
      color: aliceblue;
      padding: 2%;
      background-color: rgb(0, 103, 187);
      border-radius: 13px;
      margin: 5%;
      display: inline-block;
      white-space: pre-wrap;
      word-break: break-word;
      line-height: 15px;
      text-decoration: none;
    }

    .bloco2,
    .bloco3 h4 {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 20px;
    }

    .bloco2,
    .bloco3 p {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 18px;
      text-align: justify;
      font-weight: 600;
    }

    a {
      color: aliceblue;
    }

    footer {
      display: inline-flex;
      align-items: center;
      min-height: 80px;
      height: auto;
      width: 100%;
      margin-top: 10%;
      padding-top: 1%;
      padding-bottom: 1%;
      justify-content: space-around;
      background-color: rgb(0, 103, 187);
    }

    footer ul {
      list-style: none;
    }

    footer h4 {
      color: aliceblue;
      font-size: 17px;

      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    footer a {
      color: aliceblue;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    footer img {
      width: 50px;
    }

    .Sessao {
      display: flex;
      justify-content: space-around;
      width: 100%;
    }

    .EventosDeHoje {
      margin-top: 5%;
    }
  </style>
</head>

<body>
  <header>
    <img src="imgs/icons8-planeta-terra-48.png" alt="">
    <h3>Nasa API</h3>
    <p>Eventos do Mundo</p>

  </header>

  <?php
  $url = "https://eonet.gsfc.nasa.gov/api/v2.1/events";
  $json = json_decode(file_get_contents($url));
  ?>


  <h3 class="EventosDeHoje">Eventos de hoje:</h3>

  <code>
    <section class="Sessao">
      <div class="bloco1">
        <h4><?php print_r($json->events[0]->title) ?></h4>
        <p>Veja mais aqui: <a href="<?= print_r($json->events[0]->sources[0]->url) ?>" target="_blank"><?= print_r($json->events[0]->sources[0]->url) ?></a></p>
        <p>Categoria: <?= print_r($json->events[0]->categories[0]->title) ?></p>
        <p>Data: <?= print_r($json->events[0]->geometries[0]->date) ?> </p>
      </div>

      <div class="bloco2">
        <h4><?= print_r($json->events[1]->title) ?></h4>

        <p>Veja mais aqui: <a href="<?= print_r($json->events[1]->sources[0]->url) ?>" target="_blank"><?= print_r($json->events[1]->sources[0]->url) ?></a></p>

        <p>Categoria: <?= print_r($json->events[1]->categories[0]->title) ?></p>
        <p>Data: <?= print_r($json->events[1]->geometries[0]->date) ?></p>
      </div>


      <div class="bloco3">
        <h4><?= print_r($json->events[1]->title) ?></h4>

        <p>Veja mais aqui: <a href="<?= print_r($json->events[2]->sources[0]->url) ?>" target="_blank"><?= print_r($json->events[2]->sources[0]->url) ?></a></p>

        <p>Categoria: <?= print_r($json->events[2]->categories[0]->title) ?></p>
        <p>Data: <?= print_r($json->events[2]->geometries[0]->date) ?></p>
      </div>
    </section>
  </code>

  <footer>
    <ul>
      <li>
        <h4>Criado por Caua Mariz</h4>
      </li>
    </ul>
    <ul>
      <li>
        <h4>2024</h4>
      </li>
    </ul>
    <ul>
      <img src="imgs/iconGitHub60px.png" alt="">
      <li>
        <h4><a href="https://github.com/CauaMariz">GitHub de Caua Mariz</a></h4>
      </li>
    </ul>
  </footer>

</body>

</html>