<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Marca.class.php";
    require_once "PHP/MarcaDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;

    $msgerro = "";

    if($_POST){
        if(empty($_POST['nomemarca'])){
            $msgerro = "* Campo obrigatório!";
            $erro = true;
        }

        if(!$erro){
            
            $marca = new Marca(
                0,
                $_POST['nomemarca'],
                "Ativo"
            );

            $marcaDAO = new MarcaDAO();

            $marcainserida = $marcaDAO->inserir($marca);

            header("location:listar_marca.php");
        }
    }

?>

<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Cadastrar Marca</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Login</a> > Cadastro</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Cadastrar Marca</h1>
                <form action="#" method="POST">

                    <div>
                        <label class="subtitlecadastro" for="nomemarca">Nome da Marca*</label>
                        <input type="text" id="nomemarca" name="nomemarca" class="inputcadastro" placeholder="Digite o nome da marca" value="<?php echo isset($_POST['nomemarca'])?$_POST['nomemarca']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msgerro != ""?$msgerro:'';?></div>
                    </div>

                    <button class="botaocadastro" type="submit" value="Cadastrar">Cadastrar Marca</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>
</body>

</php>