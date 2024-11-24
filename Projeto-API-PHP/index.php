<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
  <h3>Nasa API</h3>
  <p>Eventos do Mundo</p>
  </header>

  <?php
  $url = "https://eonet.gsfc.nasa.gov/api/v2.1/events";
  $json = json_decode(file_get_contents($url));

  echo "<pre>";
  ?>



  <h3 class="EventosDeHoje">Eventos de hoje:</h3>

  <div class="bloco1">
    <h4><?php print_r($json->events[0]->title) ?></h4>
    <p>Veja mais aqui-> <a href="<?php print_r($json->events[0]->sources[0]->url) ?>" target="_blank"><?php print_r($json->events[0]->sources[0]->url) ?></a></p>
    <p>Categoria: <?php print_r($json->events[0]->categories[0]->title) ?></p>
    <p>Data: <?= print_r($json->events[0]->geometries[0]->date) ?> </p>
  </div>

</body>

</html>