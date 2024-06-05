<?php
    session_start();
    if(!isset($_SESSION['tipo'])){
        echo '
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
            <a href="login.php"><img src="icon/favorito.png" height=30px class="loginico"></a>
        </div>
        <div>
            <a href="login.php"><img src="icon/compras.png" height=30px class="loginico"></a>
        </div>
        <div>
            <a href="login.php"><img src="icon/login.png" height=30px class="loginico"></a>
        </div>
        <div class="user-actions">
            <a href="login.php"><span class="strongazul">Entrar</span> ou<br><span class="strongazul">Cadastrar-se</span></a>
        </div>
    </nav>
    <nav class="navbar2">
        <ul class="menunav2">
            <a href="index.php"><li class="textmenunav2">inicio</li></a>
            <a href="sobrenos.php"><li class="textmenunav2">Sobre Nós</li></a>
            <a href="produtogatos.php"><li class="textmenunav2">Produtos para Gatos</li></a>
            <a href="produtocaes.php"><li class="textmenunav2">Produtos para Cães</li></a>
            <a href="servicos.php"><li class="textmenunav2">Serviços</li></a>
        </ul>
    </nav>';
    };

    if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'Cliente'){
        echo "
        <nav class='navbar1'>
            <div class='logo-container'>
                <div class='brand-name'>PetCare</div>
                <img src='icon/CachorroCasinha.png' alt='logo'>
            </div>
            <div class='search-bar'>
                <div class='search-input'>
                    <input type='text' placeholder='O que você deseja hoje?' class='pesquisanav1'>
                    <img src='icon/searchicon.png' alt='search-icon' class='search-icon'>
                </div>
            </div>
            <div>
                <a href='favorito.php'><img src='icon/favorito.png' height=30px class='loginico'></a>
            </div>
            <div>
                <a href='compras.php'><img src='icon/compras.png' height=30px class='loginico'></a>
            </div>
            <div>
                <a href='login.php'><img src='icon/perfil.png' height=30px class='loginico'></a>
            </div>
            <div class='user-actions'>
                <div class='dropdown'>
                    <span>Olá, </span><span class='strongazul'>{$_SESSION['nome']}</span>!
                    <div class='dropdown-content'>
                        <a href='PHP/logout.php'>Sair</a>
                    </div>
                </div>
            </div>
        </div>
        </nav>
        <nav class='navbar2'>
            <ul class='menunav2'>
                <a href='index.php'><li class='textmenunav2'>inicio</li></a>
                <a href='sobrenos.php'><li class='textmenunav2'>Sobre Nós</li></a>
                <a href='produtogatos.php'><li class='textmenunav2'>Produtos para Gatos</li></a>
                <a href='produtocaes.php'><li class='textmenunav2'>Produtos para Cães</li></a>
                <a href='servicos.php'><li class='textmenunav2'>Serviços</li></a>
            </ul>
        </nav>";
    };

    if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'ADM'){
        echo "
        <nav class='navbar1'>
            <div class='logo-container'>
                <div class='brand-name'>PetCare</div>
                <img src='icon/CachorroCasinha.png' alt='logo'>
            </div>
            <div class='search-bar'>
                <div class='search-input'>
                    <input type='text' placeholder='O que você deseja hoje?' class='pesquisanav1'>
                    <img src='icon/searchicon.png' alt='search-icon' class='search-icon'>
                </div>
            </div>
            <div>
                <a href='favorito.php'><img src='icon/favorito.png' height=30px class='loginico'></a>
            </div>
            <div>
                <a href='compras.php'><img src='icon/compras.png' height=30px class='loginico'></a>
            </div>
            <div>
                <a href='login.php'><img src='icon/perfil.png' height=30px class='loginico'></a>
            </div>
            <div class='user-actions'>
                <div class='dropdown'>
                    <span>Olá, </span><span class='strongazul'>{$_SESSION['nome']}</span>!
                    <div class='dropdown-content'>
                        <a href='PHP/logout.php'>Sair</a>
                    </div>
                </div>
            </div>
        </nav>
        <nav class='navbar2'>
            <ul class='menunav2'>
                <a href='index.php'><li class='textmenunav2'>inicio</li></a>
                <li class='custom-dropdown'>
                    <span class='textmenunav2'>Painel de ADM</span>
                    <div class='custom-dropdown-content'>
                        <a href='cadastrar_usuario.php'>Cadastrar Usuário</a>
                        <a href='listar_usuarios.php'>Listar Usuários</a>
                        <a href='cadastrar_produtos.php'>Cadastrar Produtos</a>
                        <a href='listar_produtos.php'>Listar Produtos</a>
                    </div>
                </li>
                <a href='sobrenos.php'><li class='textmenunav2'>Sobre Nós</li></a>
                <a href='produtogatos.php'><li class='textmenunav2'>Produtos para Gatos</li></a>
                <a href='produtocaes.php'><li class='textmenunav2'>Produtos para Cães</li></a>
                <a href='servicos.php'><li class='textmenunav2'>Serviços</li></a>
            </ul>
        </nav>";
    }
    ?>