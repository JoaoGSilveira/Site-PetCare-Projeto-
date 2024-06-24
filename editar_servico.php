<?php
require_once "PHP/Conexao.class.php";
require_once "navbar.php";
require_once "PHP/Servico.class.php";
require_once "PHP/ServicoDAO.php";
require_once "verificar_permissao.php";

$erro = false;
$msgerro = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $servicoDAO = new ServicoDAO();
    $id = $_GET["id"];
    $servico = $servicoDAO->buscar_um_servico($id);

    if (!$servico) {
        header("Location: listar_servicos.php?erro=Serviço não encontrado");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["descricao"])) {
        $msgerro = "Preencha a descrição do serviço.";
    } else {

        $id_servico = (int)$_POST["idservico"];
        $descricao = $_POST["descricao"];

        $servico = new Servico($id_servico, $descricao);

        $servicoDAO = new ServicoDAO();
        $servicoDAO->alterar_descricao_servico($servico);

        header("Location: listar_servico.php");
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
    <title>PetCare | Editar Serviço</title>
</head>
<body class="bodylogin">
    <main>
        <div class="mapasite">
            <p>Onde estou?</p>
            <p class="wherelocal"><a href="index.php">Início</a> > <a href="login.php">Login</a> > Editar Serviço</p>
        </div>
        <div class="containercadastro">
            <div>
                <h1 class="titlecadastro">Editar Serviço</h1>
                <form action="#" method="POST">
                    <div>
                        <label class="subtitlecadastro" for="descricao">Descrição do Serviço*</label>
                        <input type="text" id="descricao" name="descricao" class="inputcadastro" placeholder="Digite a descrição do serviço" value="<?php echo isset($servico) ? htmlspecialchars($servico->getDescricao()) : ''; ?>">
                        <div style="color:red; text-align: left;"><?php echo $msgerro; ?></div>
                    </div>
                    <input type="hidden" name="idservico" value="<?php echo isset($servico) ? htmlspecialchars($servico->getIdServico()) : ''; ?>">
                    <button class="botaocadastro" type="submit">Alterar Serviço</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
    </footer>
</body>
</html>
