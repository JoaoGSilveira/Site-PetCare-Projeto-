<?php
require_once "PHP/Conexao.class.php";
require_once "navbar.php";
require_once "PHP/Categoria_Produto.class.php";
require_once "PHP/CategoriaDAO.php";
require_once "verificar_permissao.php";

$erro = false;
$msgerro = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $categoria = new Categoria_Produto((int)$_GET["id"]);
    $categoriaDAO = new CategoriaDAO();
    $retorno = $categoriaDAO->buscar_uma_categoria($categoria);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nomecat"])) {
        $msgerro = "Preencha o descritivo da categoria";
    } else {
        $idcategoria = $_POST["idcategoria"];
        $nomecat = $_POST["nomecat"];

        $categoria = new Categoria_Produto($idcategoria, $nomecat);

        $categoriaDAO = new CategoriaDAO();
        $categoriaDAO->alterar($categoria);

        header("Location: listar_categoria.php");
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
    <title>PetCare | Editar Categoria</title>
</head>

<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">Início</a> > <a href="login.php">Login</a> > Editar Categoria</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Editar Categoria</h1>
                <form action="#" method="POST">
                    <div>
                        <label class="subtitlecadastro" for="nomecat">Nome da Categoria*</label>
                        <input type="text" id="nomecat" name="nomecat" class="inputcadastro" placeholder="Digite o nome da categoria" value="<?php echo isset($retorno[0]->nome_categoria) ? $retorno[0]->nome_categoria : ''; ?>">
                        <div style="color:red; text-align: left;"><?php echo $msgerro; ?></div>
                    </div>
                    <input type="hidden" name="idcategoria" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                    <button class="botaocadastro" type="submit">Alterar Categoria</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
    </footer>
</body>

</html>
