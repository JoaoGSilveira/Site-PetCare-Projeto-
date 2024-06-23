<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/ProdutoDAO.php";
    require_once "PHP/Produto.class.php";
    require_once "PHP/Pessoa.class.php";
    require_once "PHP/Categoria_Produto.class.php";
    require_once "PHP/CategoriaDAO.php";
    require_once "PHP/Marca.class.php";
    require_once "PHP/MarcaDAO.php";
    require_once "PHP/cliente.class.php";
    require_once "PHP/ClienteDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;

    $msg = array("","","","","","","","");

    if($_POST){

        if(empty($_POST['nomeproduto'])){
            $msg[0] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['descriproduto'])){
            $msg[1] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['tipoanimal'])){
            $msg[2] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['marca'])){
            $msg[3] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['categoria'])){
            $msg[4] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['precoproduto'])){
            $erro = true;
            $msg[5] = "* Campo obrigatório!";
        }

        if(empty($_POST['estoque'])){
            $msg[6] = "* Campo obrigatório!";
            $erro = true;
        }

        if(empty($_POST['imagem'])){
            $msg[7] = "* Campo obrigatório!";
            $erro = true;
        }

        if (!$erro) {
            $marca = new Marca($_POST['marca']);
            $catproduto = new Categoria_Produto($_POST['categoria']);

            $produto = new Produto(
                0,
                $_POST['nomeproduto'],
                $_POST['descriproduto'],
                $_POST['precoproduto'],
                $_POST['estoque'],
                $_POST["imagem"],
                $_POST['tipoanimal'],
                "Ativo",
                $marca,
                $catproduto
            );

            $produtoDAO = new ProdutoDAO();
            $inserirproduto = $produtoDAO->inserir($produto);

            header("location:listar_produtos.php");
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
                        <label class="subtitlecadastro" for="tipoanimal">Produto para:*</label>
                        <select id="tipoanimal" name="tipoanimal" class="inputcadastro">
                            <option value="">Selecione o tipo de animal.</option>
                            <option value="Cachorro" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Cachorro') ? 'selected' : ''; ?>>Cachorro</option>
                            <option value="Gato" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Gato') ? 'selected' : ''; ?>>Gato</option>
                            <option value="Ambos" <?php echo (isset($_POST['tipoanimal']) && $_POST['tipoanimal'] == 'Ambos') ? 'selected' : ''; ?>>Ambos</option>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[2] != ""?$msg[2]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="marca">Marca*</label>
                        <select id="marca" name="marca" class="inputcadastro">
                        <option value="">Escolha uma marca</option>
                        <?php
                
                            $marca = new Marca(status:"Ativo");
                                
                            $marcaDAO = new MarcaDAO();
                                
                            $retmarca = $marcaDAO->buscar_marcas_ativas($marca);

                            foreach($retmarca as $marcas)
                            {
                                if(isset($_POST["marca"]) && $_POST["marca"] == $marcas->id_marca){
                                    echo "<option value='{$marcas->id_marca}' selected>{$marcas->nome}</option>";
                                }
                                else{
                                    echo "<option value='{$marcas->id_marca}'>{$marcas->nome}</option>";
                                }
                            } 
                        ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[3] != ""?$msg[3]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="categoria">Categoria*</label>
                        <select id="categoria" name="categoria" class="inputcadastro">

                            <option value="">Escolha uma categoria</option>
                            
                            <?php
                                $categoria = new Categoria_Produto(status:"Ativo");
                                $categoriaDAO = new CategoriaDAO();
                                $retcategoria = $categoriaDAO->buscar_categorias_ativas($categoria);

                                foreach($retcategoria as $categorias) {
                                    if(isset($_POST["categoria"]) && $_POST["categoria"] == $categorias->id_categoria){
                                        echo "<option value='{$categorias->id_categoria}' selected>{$categorias->nome_categoria}</option>";
                                    }
                                    else{
                                        echo "<option value='{$categorias->id_categoria}'>{$categorias->nome_categoria}</option>";
                                    }
                                } 
                            ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $msg[4] != "" ? $msg[4] : '';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="precoproduto">Preço*</label>
                        <input type="number" step="0.01" id="precoproduto" name="precoproduto" onblur="aplicarFormatacao()" maxlength="11" class="inputcadastro" placeholder="Digite o preço do produto" value="<?php echo isset($_POST['precoproduto'])?$_POST['precoproduto']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[5] != ""?$msg[5]:'';?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="estoque">Estoque*</label>
                        <input type="number" id="estoque" name="estoque" class="inputcadastro" placeholder="Digite a quantidade em estoque" value="<?php echo isset($_POST['estoque'])?$_POST['estoque']:''?>">
                        <div style="color:red; text-align: left;"><?php echo $msg[6] != ""?$msg[6]:'';?></div>
                    </div>
                    
                    <div>
                        <label for="imagem" class="subtitlecadastro">Imagem do Produto*</label>
                        <input type="file" class="inputcadastro" id="imagem" name="imagem" accept="image/png, image/jpeg, image/webp">
                        <div style="color:red; text-align: left;"><?php echo $msg[7] != ""?$msg[7]:'';?></div>
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