<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Marca.class.php";
    require_once "PHP/MarcaDAO.php";
    require_once "verificar_permissao.php";

    $erro = false;
    $msgerro = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $marcaDAO = new MarcaDAO();
        $id = (int)$_GET["id"];
        $retorno = $marcaDAO->buscar_uma_marca($id);
        if (empty($retorno)) {
            header("Location: listar_marcas.php?erro=Marca não encontrada");
            exit();
        } else {
            $marca = $retorno;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nomemarca"])) {
            $msgerro = "Preencha o nome da marca.";
        } else {
            $idmarca = (int)$_POST["idmarca"];
            $nomemarca = $_POST["nomemarca"];

            $marca = new Marca($idmarca, $nomemarca);

            $marcaDAO = new MarcaDAO();
            $marcaDAO->alterar($marca);

            header("Location: listar_marca.php");
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
    <title>PetCare | Editar Marca</title>
</head>
<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">Início</a> > <a href="login.php">Login</a> > Editar Marca</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Editar Marca</h1>
                <form action="#" method="POST">
                    <div>
                        <label class="subtitlecadastro" for="nomemarca">Nome da Marca*</label>
                        <input type="text" id="nomemarca" name="nomemarca" class="inputcadastro" placeholder="Digite o nome da marca" value="<?php echo isset($marca) ? htmlspecialchars($marca->nome) : ''; ?>">
                        <div style="color:red; text-align: left;"><?php echo $msgerro; ?></div>
                    </div>
                    <input type="hidden" name="idmarca" value="<?php echo isset($marca) ? htmlspecialchars($marca->id_marca) : ''; ?>">
                    <button class="botaocadastro" type="submit">Alterar Marca</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
    </footer>
</body>
</html>
