<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Login</title>
</head>

<body class="bodylogin">
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
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > Login</p>
        </div>

        <div class="containerlogin">
            <div>
                <h1 class="titlecriarconta">Ainda não possui uma conta? Criar uma conta é rápido, fácil e gratuito!</h1>
                <p class="textcriarconta">Com a sua conta da PetCare você tem acesso a ofertas , descontos, acompanhar
                    os seus pedidos e muito mais!
                </p>
                <a href="cadastro.php"><div class="criarcontabutton">
                    <p class="textcriarcontabutton">Criar minha conta!</p>
                </div></a>
            </div>
            <div class="textlogin">
                <h1 class="titlelogin">Acessar sua conta</h1>
                <form action="/sendlogin" method="get">
                    <div>
                        <label class="logintext">Login</label>
                        <input type="text" id="login" class="login" placeholder="Digite seu E-mail ou CPF/CNPJ">
                      </div>
                      <div>
                        <label class="senhalogintext">Senha</label>
                        <input type="password" id="senhalogin" class="senhalogin" placeholder="Digite sua senha aqui">
                        <button class="botaologin">Entrar</button>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>

</body>

</php>