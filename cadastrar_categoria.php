<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Categoria_Produto.class.php";
    require_once "PHP/CategoriaDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;

    $msgerro = "";

    if($_POST){
        if(empty($_POST['nomecat'])){
            $msgerro = "* Campo obrigatório!";
            $erro = true;
        }

        if(!$erro){
            
            $categoria = new Categoria_Produto(
                0,
                $_POST['nomecat'],
                "Ativo"
            );

            $categoriaDAO = new CategoriaDAO();

            $categoriainserida = $categoriaDAO->inserir($categoria);

            header("location:listar_categoria.php");
        }
    }

?>

<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Cadastrar Categoria</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Login</a> > Cadastro</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Cadastrar Categoria</h1>
                <form action="#" method="POST">

                    <div>
                        <label class="subtitlecadastro" for="nomecat">Nome da Categoria*</label>
                        <input type="text" id="nomecat" name="nomecat" class="inputcadastro" placeholder="Digite o nome da categoria" value="<?php echo isset($_POST['nomecat'])?$_POST['nomecat']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msgerro != ""?$msgerro:'';?></div>
                    </div>

                    <button class="botaocadastro" type="submit" value="Cadastrar">Cadastrar Categoria</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>
</body>

</php>