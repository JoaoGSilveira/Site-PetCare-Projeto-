<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Servico.class.php";
    require_once "PHP/ServicoDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;

    $msgerro = "";

    if($_POST){
        if(empty($_POST['nomeservico'])){
            $msgerro = "* Campo obrigatório!";
            $erro = true;
        }

        if(!$erro){
            
            $servico = new Servico(
                0,
                $_POST['nomeservico'],
                "Ativo"
            );

            $ServicoDAO = new ServicoDAO();

            $servicoinserido = $ServicoDAO->inserir($servico);

            header("location:listar_servico.php");
        }
    }

?>

<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Cadastrar Servico</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Login</a> > Cadastro</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Cadastrar Servico</h1>
                <form action="#" method="POST">

                    <div>
                        <label class="subtitlecadastro" for="nomeservico">Nome do Servico*</label>
                        <input type="text" id="nomeservico" name="nomeservico" class="inputcadastro" placeholder="Digite o nome do serviço" value="<?php echo isset($_POST['nomeservico'])?$_POST['nomeservico']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msgerro != ""?$msgerro:'';?></div>
                    </div>

                    <button class="botaocadastro" type="submit" value="Cadastrar">Cadastrar Serviço</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>
</body>

</php>