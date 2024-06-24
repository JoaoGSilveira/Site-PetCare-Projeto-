<?php
require_once "PHP/Conexao.class.php";
require_once "navbar.php";
require_once "PHP/ProdutoDAO.php";
require_once "PHP/Produto.class.php";
require_once "PHP/Marca.class.php";
require_once "PHP/MarcaDAO.php";
require_once "PHP/Categoria_Produto.class.php";
require_once "PHP/CategoriaDAO.php";
require_once "verificar_permissao.php";

$erro = false;
$erroCampos = [];

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id_produto = $_GET["id"];

    $produtoDAO = new ProdutoDAO();
    $produto = $produtoDAO->buscarPorId($id_produto);

    if (!$produto) {
        echo "Produto não encontrado.";
        exit;
    }
} else {
    echo "ID do produto não especificado.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nomeproduto"])) {
        $erroCampos['nomeproduto'] = "Preencha o nome do produto";
        $erro = true;
    }

    if (empty($_POST["descriproduto"])) {
        $erroCampos['descriproduto'] = "Preencha a descrição do produto";
        $erro = true;
    }

    if (empty($_POST["tipoanimal"])) {
        $erroCampos['tipoanimal'] = "Selecione o tipo de animal";
        $erro = true;
    }

    if (empty($_POST["marca"])) {
        $erroCampos['marca'] = "Selecione a marca";
        $erro = true;
    }

    if (empty($_POST["categoria"])) {
        $erroCampos['categoria'] = "Selecione a categoria";
        $erro = true;
    }

    if (empty($_POST["precoproduto"])) {
        $erroCampos['precoproduto'] = "Preencha o preço do produto";
        $erro = true;
    }

    if (empty($_POST["estoque"])) {
        $erroCampos['estoque'] = "Preencha o estoque do produto";
        $erro = true;
    }

    if (empty($_POST["imagem"])) {
        $erroCampos['imagem'] = "Selecione uma imagem para o produto";
        $erro = true;
    }

    if (!$erro) {
        $marcaDAO = new MarcaDAO();
        $marca = $marcaDAO->buscarPorId($_POST["marca"]);
        $catproduto = new Categoria_Produto($_POST["categoria"]);

        $produtoAtualizado = new Produto(
            $id_produto,
            $_POST["nomeproduto"],
            $_POST["descriproduto"],
            $_POST["precoproduto"],
            $_POST["estoque"],
            $_POST["imagem"],
            $_POST["tipoanimal"],
            "Ativo",
            $marca,
            $catproduto
        );

        $produtoDAO = new ProdutoDAO();
        $produtoDAO->atualizar($produtoAtualizado);

        header("Location: listar_produtos.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Editar Produto</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">Início</a> > <a href="login.php">Login</a> > Editar Produto</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Editar Produto</h1>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div>
                        <label class="subtitlecadastro" for="nomeproduto">Nome Produto*</label>
                        <input type="text" id="nomeproduto" name="nomeproduto" class="inputcadastro" placeholder="Digite o nome do produto" value="<?php echo $produto->getNome(); ?>">
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['nomeproduto'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="descriproduto">Descrição Produto*</label>
                        <textarea id="descriproduto" name="descriproduto" class="inputcadastro" placeholder="Digite a descrição do produto"><?php echo $produto->getDescricao(); ?></textarea>
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['descriproduto'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="tipoanimal">Produto para:*</label>
                        <select id="tipoanimal" name="tipoanimal" class="inputcadastro">
                            <option value="Cachorro" <?php echo ($produto->getAnimal() == 'Cachorro') ? 'selected' : ''; ?>>Cachorro</option>
                            <option value="Gato" <?php echo ($produto->getAnimal() == 'Gato') ? 'selected' : ''; ?>>Gato</option>
                            <option value="Ambos" <?php echo ($produto->getAnimal() == 'Ambos') ? 'selected' : ''; ?>>Ambos</option>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['tipoanimal'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="marca">Marca*</label>
                        <select id="marca" name="marca" class="inputcadastro">
                            <option value="">Escolha uma marca</option>
                            <?php
                            $marcaDAO = new MarcaDAO();
                            $retmarca = $marcaDAO->buscar_todos();

                            foreach ($retmarca as $marca) {
                                $selected = ($produto->getMarca()->getIdMarca() == $marca->id_marca) ? 'selected' : '';
                                echo "<option value='{$marca->id_marca}' {$selected}>{$marca->nome}</option>";
                            }
                            ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['marca'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="categoria">Categoria*</label>
                        <select id="categoria" name="categoria" class="inputcadastro">
                            <option value="">Escolha uma categoria</option>
                            <?php
                                $categoriaDAO = new CategoriaDAO();
                                $retcategoria = $categoriaDAO->buscar_categorias_ativas();
                                
                                foreach ($retcategoria as $categoria) {
                                    $selected = ($produto->getCategoria()->getIdCategoria() == $categoria->id_categoria) ? 'selected' : '';
                                    echo "<option value='{$categoria->id_categoria}' {$selected}>{$categoria->nome_categoria}</option>";
                                }
                            ?>
                        </select>
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['categoria'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="precoproduto">Preço*</label>
                        <input type="number" step="0.01" id="precoproduto" name="precoproduto" class="inputcadastro" placeholder="Digite o preço do produto" value="<?php echo $produto->getPrecoProduto(); ?>">
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['precoproduto'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label class="subtitlecadastro" for="estoque">Estoque*</label>
                        <input type="number" id="estoque" name="estoque" class="inputcadastro" placeholder="Digite a quantidade em estoque" value="<?php echo $produto->getEstoque(); ?>">
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['estoque'] ?? ''; ?></div>
                    </div>

                    <div>
                        <label for="imagem" class="subtitlecadastro">Imagem do Produto*</label>
                        <input type="file" class="inputcadastro" id="imagem" name="imagem" accept="image/png, image/jpeg, image/webp">
                        <div style="color:red; text-align: left;"><?php echo $erroCampos['imagem'] ?? ''; ?></div>
                    </div>

                    <button class="botaocadastro" type="submit">Atualizar</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
    </footer>
</body>

</html>
