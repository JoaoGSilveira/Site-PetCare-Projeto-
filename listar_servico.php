<?php
require_once "PHP/Conexao.class.php";
require_once "navbar.php";
require_once "PHP/Servico.class.php";
require_once "PHP/ServicoDAO.php";
require_once "verificar_permissao.php";

$servicoDAO = new ServicoDAO();

$servicos = $servicoDAO->buscar_todos();
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Listar Serviços</title>
</head>
<body>
    <h1 class="titletabelaclientes">Tabela de Serviços</h1>
    <?php
        echo "
        <div class='tabelacontainer'>
            <table class='tabela'>
                <tr class='titletabela'>
                    <th>ID</th>
                    <th>Serviço</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>";

        foreach ($servicos as $servico){
            echo "
            <tr>
                <td>{$servico->id_servico}</td>
                <td>{$servico->descricao}</td>
                <td>{$servico->servico_status}</td>
                <td>
                    <a href='editar_servico.php?id={$servico->id_servico}' class='botaoalterar'>Alterar</a>
                    
                    &nbsp;&nbsp;";
                    
                    if($servico->servico_status == "Ativo") {
                        echo "<a href='alterar_status_servico.php?id={$servico->id_servico}&status=Inativo' class='botaoinativar'>Inativar</a>";
                    } else {
                        echo "<a href='alterar_status_servico.php?id={$servico->id_servico}&status=Ativo' class='botaoativar'>Ativar</a>";
                    }

            echo "</td>
            </tr>";
        }

        echo "</table>
        </div class='tabelacontainer'>";
    ?>
</body>
</html>
