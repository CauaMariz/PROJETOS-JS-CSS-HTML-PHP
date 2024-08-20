<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>


	<?php

	echo "Ola mundo";
	echo "<br>";
	$Dados = array('Joao', 'Pedro', 'Maria');

	$SegundoArray = array(
		"nome" => "Caua",
		"idade" => 17,
		"pais" => "Brasil",

		"NotasEscola" => array(
			"Geografia" => 7,
			"Historia" => 7,
			"Matematica" => 9,
		)
	);
	
	echo "<pre>";
	print_r($Dados);
	echo "<pre>";

	print_r($SegundoArray["NotasEscola"]);
	print('<br>');

	print_r("Nota de Geografia: " . "<b>" . $SegundoArray["NotasEscola"]["Geografia"] . "</b>");
	echo "<br>";
	echo "<br>";

	print_r("Nota de Historia: " . "<b>" . $SegundoArray["NotasEscola"]["Historia"] . "</b>");
	echo "<br>";
	echo "<br>";

	print_r("Nota de Matematica: " . "<b>" . $SegundoArray["NotasEscola"]["Matematica"] . "<b>");

	?>
</body>

</html>