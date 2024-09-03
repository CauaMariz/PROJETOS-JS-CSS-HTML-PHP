<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .cabecalho {
            height: 80px;
            width: 100vw;
            background-color: rgb(96, 201, 127);
            margin-bottom: 1vh;
            box-shadow: 0 0 5px black;

            h2 {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                color: aliceblue;
                padding: 1% 0 0 1%;
                font-size: 30px;
            }
        }

        .MsgIncom {
            font-family: 'Courier New', Courier, monospace;
            color: red;
            padding: 2%;
            font-size: 30px;
        }

        .MsgDados {
            display: flex;
            justify-content: center;
            font-size: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgb(96, 201, 127);
            color: white;
            max-width: 150px;
            padding: 10px 0 10px 0;
            border-radius: 6px;
            margin-left: 45vw;
            margin-top: 20vh;
            font-weight: 600;
        }

        .MsgDados2 {
            display: flex;
            justify-content: center;
            font-size: 20px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgb(96, 201, 127);
            color: white;
            max-width: 150px;
            padding: 10px 2px 10px 20px;
            border-radius: 6px;
            margin-left: 45vw;
            margin-top: 1vh;
            font-weight: 600;
        }

        .menu {
            width: 0;
            height: 0;
            transition: 0.6s;
            margin-left: 0.2%;
        }

        .Ver {
            height: 20vh;
            width: 100px;
            background-color: rgb(96, 201, 127);
            border-radius: 6px;
            transition: 0.6s;

            a {
                font-family: arial;
                text-decoration: none;
                font-size: 15px;
                color: white;
            }

            a:hover {
                text-decoration: underline;
            }
        }

        a {

            padding: 28px;

        }

        #btn {
            border: none;
            padding: 5px;
            background-color: rgb(96, 201, 127);
            color: white;
            cursor: pointer;
            border-radius: 3px;
            margin-left: 0.2%;
            margin-top: 0.5%;
        }
    </style>
</head>

<body>

    <div class="cabecalho">
        <h2>Resultado</h2>
    </div>

    <div class="menu"></div>

    <button id="btn" onclick="btn()">Menu</button>

    <?php
    function See()
    {
        $nome = $_GET["name"];
        $idade = $_GET["age"];

        if ($nome == "" or $idade == "") {
            echo " <div class='MsgIncom'> Error:  Dados incompletos! </div> ";
        } else {

            echo " <div class='MsgDados'> Dados: <br>   Nome: $nome,  <br> Idade: $idade  <br> </div> ";

            if ($idade < 18) {
                echo " <div class='MsgDados2'>  Menor de idade: $idade </div> ";
            } else {
                echo " <div class='MsgDados2'>  Maior de idade: $idade </div> ";
            }
        }
    }

    See();


    ?>

    <script src="script.js"></script>
</body>

</html>