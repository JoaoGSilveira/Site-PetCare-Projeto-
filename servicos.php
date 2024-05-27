<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Serviços</title>
</head>

<body>
    <nav class="navbar1">
        <div class="logo-container">
            <div class="brand-name">PetCare</div>
            <img src="icon/CachorroCasinha.png" alt="logo">
        </div>
        <div class="search-bar">
            <div class="search-input">
                <input type="text" placeholder="O que você deseja hoje?" class="pesquisanav1">
                <img src="icon/searchicon.png" alt="search-icon" class="search-icon">
            </div>
        </div>
        <div>
            <a href="favorito.php"><img src="icon/favorito.png" height=30px class="loginico"></a>
        </div>
        <div>
            <a href="compras.php"><img src="icon/compras.png" height=30px class="loginico"></a>
        </div>
        <div>
            <a href="login.php"><img src="icon/login.png" height=30px class="loginico"></a>
        </div>
        <div class="user-actions">
            <a href="login.php"><span class="strongazul">Entrar</span> ou<br><span
                    class="strongazul">Cadastrar-se</span></a>
        </div>
    </nav>
    <nav class="navbar2">
        <ul class="menunav2">
            <a href="index.php">
                <li class="textmenunav2">inicio</li>
            </a>
            <a href="sobrenos.php">
                <li class="textmenunav2">Sobre Nós</li>
            </a>
            <a href="produtogatos.php">
                <li class="textmenunav2">Produtos para Gatos</li>
            </a>
            <a href="produtocaes.php">
                <li class="textmenunav2">Produtos para Cães</li>
            </a>
            <a href="servicos.php">
                <li class="textmenunav2">Serviços</li>
            </a>
        </ul>
    </nav>
    <main class="bodyservico">
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > Serviços</p>
        </div>
        <img src="foto produtos/banhoetosa1.webp" alt="foto banho" class="fotobanho">
        <div class="containerservicos">
            <h1>Nossos Serviços</h1>
            <div class="text1servico">
                <h2>Banho</h2>
                <p class="textservicobanho">Seu pet limpinho e cheiroso com o banho do pet shop.Cuidar da higiene do seu
                    pet é essencial para a saúde
                    e o bem-estar dele. Além de prevenir doenças e odores desagradáveis, o banho regular ajuda a remover
                    pelos soltos, pulgas e carrapatos, e manter a pelagem macia e brilhante.
                </p>
            </div>

            <img src="foto produtos/tosaimg.jpg" alt="foto de tosa" class="tosaimg">
            <div class="text2servico">
                <h2 class="titletext2">Tosa</h2>
                <p>Deixe seu pet estiloso com a tosa do pet shop. A tosa é um serviço importante para a saúde e o
                    bem-estar do seu pet. Além de deixá-lo mais bonito e estiloso.</p>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>

</body>

</php>