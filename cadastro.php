<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Cadastrar-se</title>
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
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Login</a> > Cadastro</p>
        </div>

        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Criar sua conta</h1>
                <form action="/sendcadastro" method="get">
                    <div>
                        <label class="subtitlecadastro">Nome Completo*</label>
                        <input type="text" id="logincadastro" class="inputcadastro" placeholder="Digite seu nome">
                    </div>

                    <div>
                        <label class="subtitlecadastro">E-mail*</label>
                        <input type="email" id="login" class="inputcadastro" placeholder="Digite seu E-mail">
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro">Celular*</label>
                        <input type="tel" id="senhalogin" class="inputcadastro" placeholder="Digite seu celular">
                    </div>

                    <div>
                        <label class="subtitlecadastro">CPF*</label>
                        <input type="text" id="login" class="inputcadastro" placeholder="Digite seu CPF/CNPJ">
                    </div>

                    <div>
                        <label class="subtitlecadastro">Senha*</label>
                        <input type="password" id="senhalogin" class="inputcadastro" placeholder="Digite sua senha aqui">
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro">Confirmar Senha*</label>
                        <input type="password" id="login" class="inputcadastro" placeholder="Digite sua senha aqui novamente">
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro">Cidade*</label>
                        <input type="text" id="login" class="inputcadastro" placeholder="Digite sua cidade">
                        <label class="subtitlecadastro">Estado*</label>
                        <input type="text" id="login" class="inputcadastro" placeholder="Digite seu estado">
                    </div>

                    <div>
                        <label class="subtitlecadastro">Rua*</label>
                        <input type="text" id="login" class="inputcadastro" placeholder="Digite sua rua">
                    </div>

                    <div>
                        <label class="subtitlecadastro">Bairro*</label>
                        <input type="text" id="login" class="inputcadastro" placeholder="Digite seu bairro">
                    </div>

                    <div>
                        <label class="subtitlecadastro">Número*</label>
                        <input type="number" id="login" class="inputcadastro" placeholder="Digite o número da sua casa">
                    </div>

                    <div>
                        <label class="subtitlecadastro">CEP*</label>
                        <input type="number" id="login" class="inputcadastro" placeholder="Digite seu CEP">
                    </div>
                    <button class="botaocadastro">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>

</body>

</php>