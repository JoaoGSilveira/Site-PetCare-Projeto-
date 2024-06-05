<?php
    
    require_once "PHP/Conexao.class.php";
    require_once "PHP/ClienteDAO.php";
    require_once "navbar.php";

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
    <h1 class="titletabelaclientes">Tabela de Clientes</h1>
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
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
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
                    <td>$clientes->cep</td>
                    <td>$clientes->logradouro</td>
                    <td>$clientes->numero</td>
                    <td>$clientes->bairro</td>
                    <td>$clientes->cidade</td>
                    <td>$clientes->uf</td>
                </tr>";
            }

            echo "</table>
        </div class='tabelacontainer'>";
    ?>

</body>
</html>