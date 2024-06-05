<?php

$msgerro = array("","");
$erro = false;

if($_POST){
    if(empty($_POST['login'])){
        $msgerro[0] = "* Campo Obrigatório!";
        $erro = true;
    }
    if(empty($_POST['senhalogin'])){
        $msgerro[1] = "* Campo Obrigatório!";
        $erro = true;
    }

    if(!$erro){
        require_once "PHP/Conexao.class.php";
        require_once "PHP/Pessoa.class.php";
        require_once "PHP/cliente.class.php";
        require_once "PHP/ClienteDAO.php";
    
        $cliente = new Cliente(email:$_POST["login"], senha:md5($_POST["senhalogin"]));
    
        $clienteDAO = new ClienteDAO();
        
        $verificarLogin = $clienteDAO->verificar_login($cliente);
    
        if(count($verificarLogin) > 0) {
            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["nome"] = $verificarLogin[0]->nome;
            $_SESSION["id_cliente"] = $verificarLogin[0]->id_cliente;
            $_SESSION["tipo"] = $verificarLogin[0]->tipo;
            header("location:index.php");
        } else {
            $mensagem = "Verifique o e-mail/senha";
        }
    }
}

?>

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
                <form action="#" method="POST">
                    <div>
                        <label class="logintext">Login</label>
                        <input type="email" id="login" name="login" class="login" value="<?php echo isset($_POST['login'])?$_POST['login']:''?>" placeholder="Digite seu E-mail">
                        <div style="color:red; text-align: left;"><?php echo $msgerro[0] != ""?$msgerro[0]:'';?></div>
                      </div>
                      <div>
                        <label class="senhalogintext">Senha</label>
                        <input type="password" id="senhalogin" name="senhalogin" class="senhalogin" placeholder="Digite sua senha aqui">
                        <div style="color:red; text-align: left;"><?php echo $msgerro[1] != ""?$msgerro[1]:'';?></div>
                        <div style="color:red; text-align: left;"><?php echo isset($mensagem) ? $mensagem : ''; ?></div>
                        <button type="submit" class="botaologin">Entrar</button>
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