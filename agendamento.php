<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "verificar_permissao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Agendar Serviço</title>
    <style>
        body {
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">Início</a> > <a href="login.php">Painel de ADM</a> > Agendar Serviço</p>
        </div>
        
        <div id='calendar'></div>
    </main>

    <footer class="footer">
        
    </footer>

    <script src="JS/jscalendar.js"></script>
    <script src="JS/index.global.min.js"></script>
    <script src="JS/core/locales-all.global.min.js"></script>
</body>

</html>