<?php
    require_once "navbar.php";
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Início</title>
</head>
<body class="bodyadm">
    <nav class="navbar1">
        <div class="logo-container">
            <div class="brand-name">PetCare</div>
            <img src="icon/CachorroCasinha.png" alt="logo">
        </div>
        <div class="user-actions">
            <a href="login.html"><span class="strongazul">Entrar</span> ou<br><span class="strongazul">Cadastrar-se</span></a>
        </div>
    </nav>

    <div class="containeradmin">
        <h1 class="titleadmin">Acessar</h1>
        <a href="tabelaproduto.php"><button class="buttonProduto">Produtos</button></a>
        <a href="tabelacliente.php"><button class="buttonCliente" href = "tabelacliente.php">Clientes</button></a>
    </div>
</body>
</html>
