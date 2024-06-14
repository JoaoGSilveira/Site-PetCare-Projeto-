<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Pessoa.class.php";
    require_once "PHP/cliente.class.php";
    require_once "PHP/ClienteDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;

    $msg = array("","","","","","","");

    if($_POST){

        if(empty($_POST['nomeproduto'])){
            $msg[0] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['descriproduto'])){
            $msg[1] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['precoproduto'])){
            $msg[2] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['precoproduto'])){
            $msg[2] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['cpf'])){
            $msg[3] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['tipoanimal'])){
            $erro = true;
            $msg[4] = "* Campo obrigatório!";
        }

        if(empty($_POST['senha'])){
            $msg[5] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['confirmarsenha'])){
            $msg[6] = "* Campo obrigatório!";
            $erro = true;
        }
    }
?>

<!DOCTYPE php>
<php lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Cadastrar Produto</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">inicio</a> > <a href="login.php">Painel de ADM</a> > Cadastro de Produtos</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Cadastrar Produto</h1>
                <form action="#" method="POST">

                    <div>
                        <label class="subtitlecadastro" for="nomeproduto">Nome Produto*</label>
                        <input type="text" id="nomeproduto" name="nomeproduto" class="inputcadastro" placeholder="Digite o nome do produto" value="<?php echo isset($_POST['nomeproduto'])?$_POST['nomeproduto']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="descriproduto">Descrição Produto*</label>
                        <input type="textarea" id="descriproduto" name="descriproduto" class="inputcadastro" placeholder="Digite a descição do produto" value="<?php echo isset($_POST['descriproduto'])?$_POST['descriproduto']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[1] != ""?$msg[1]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="cpf">Produto para:*</label>
                        <select id="tipoanimal" name="tipoanimal" class="inputcadastro">
                            <option value="">Selecione o tipo de animal.</option>
                            <option value="Cachorro" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Cachorro') ? 'selected' : ''; ?>>Cachorro</option>
                            <option value="Gato" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Gato') ? 'selected' : ''; ?>>Gato</option>
                            <option value="Ambos" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Ambos') ? 'selected' : ''; ?>>Ambos</option>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="cpf">Marca*</label>
                        <select id="marca" name="marca" class="inputcadastro">
                            <option value="">Selecione a marca do produto.</option>
                            <option value="ADM" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'ADM') ? 'selected' : ''; ?>>Administrador</option>
                            <option value="Cliente" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Cliente') ? 'selected' : ''; ?>>Cliente</option>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="cpf">Categoria*</label>
                        <select id="tipoanimal" name="tipoanimal" class="inputcadastro">
                            <option value="">Selecione a categoria do produto.</option>
                            <option value="ADM" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'ADM') ? 'selected' : ''; ?>>Administrador</option>
                            <option value="Cliente" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Cliente') ? 'selected' : ''; ?>>Cliente</option>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="precoproduto">Preço*</label>
                        <input type="number" id="precoproduto" name="precoproduto" onblur="aplicarFormatacao()" maxlength="11" class="inputcadastro" placeholder="Digite o preço do produto" value="<?php echo isset($_POST['precoproduto'])?$_POST['precoproduto']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="senha">Estoque*</label>
                        <input type="number" id="senha" name="senha" class="inputcadastro" placeholder="Digite a quantidade em estoque" value="<?php echo isset($_POST['senha'])?$_POST['senha']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[5] != ""?$msg[5]:'';?></div>
                    </div>
                    
                    <div>
                        <label class="subtitlecadastro" for="imgproduto">Imagem do Produto*</label>
                        <input type="file" id="imgproduto" name="imgproduto" class="inputcadastro" placeholder="Digite sua senha aqui novamente" value="<?php echo isset($_POST['imgproduto'])?$_POST['imgproduto']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[6] != ""?$msg[6]:'';?></div>
                    </div>

                    <button class="botaocadastro" type="submit" value="Cadastrar">Cadastrar</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="footer">

    </footer>
</body>

</php>