<?php
    require_once "PHP/Conexao.class.php";
    require_once "PHP/ClienteDAO.php";
    require_once "navbar.php";
    require_once "verificar_permissao.php";

    $clienteDAO = new ClienteDAO();

    $cliente = $clienteDAO->buscar_todos();

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Listar Usuários</title>
</head>
<body>
    <h1 class="titletabelaclientes">Tabela de Usuários</h1>
    <?php

        echo "
        <div class='tabelacontainer'>
            <table class='tabela'>
                <tr class='titletabela'>
                    <th>ID</th>
                    <th>Tipo de Usuário</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>";

            foreach ($cliente as $clientes){
                echo "
                <tr>
                    <td>$clientes->id_cliente</td>
                    <td>$clientes->tipo</td>
                    <td>$clientes->nome</td>
                    <td>$clientes->email</td>
                    <td>$clientes->telefone</td>
                    <td>$clientes->cpf</td>
                    <td>$clientes->status_cliente</td>
                    <td>
						<a href='editar.php?id={$clientes->id_cliente}' class='botaoalterar'>Alterar</a>
								
						&nbsp;&nbsp;
								
						<a href='excluir.php?id={$clientes->id_cliente}' class='botaoexcluir'>Excluir</a>
								
						&nbsp;&nbsp;";

						if($clientes->status_cliente == "Ativo")
						{
							echo "<a href='alterar_status.php?id={$clientes->id_cliente}&status=Inativo'class='botaoinativar'>Inativar</a>";
						}
						else
						{
							echo "<a href='alterar_status.php?id={$clientes->id_cliente}&status=Ativo' class='botaoativar'>Ativar</a>";
						}
                        
			    echo "</td>
                </tr>";
            }

            echo "</table>
        </div class='tabelacontainer'>";
    ?>

</body>
</html>