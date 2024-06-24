<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Produto.class.php";
    require_once "PHP/ProdutoDAO.php";
    require_once "verificar_permissao.php";

    $produtoDAO = new ProdutoDAO();

    $produto = $produtoDAO->buscar_todos();

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Listar Produtos</title>
</head>
<body>
    <h1 class="titletabelaclientes">Tabela de Produtos</h1>
    <?php

        echo "
        <div class='tabelacontainer'>
            <table class='tabela'>
                <tr class='titletabela'>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Tipo de Animal</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>";

            foreach ($produto as $produtos){
                echo "
                <tr>
                    <td>$produtos->id_produto</td>
                    <td>$produtos->nome</td>
                    <td>$produtos->estoque</td>
                    <td>$produtos->preco</td>
                    <td>$produtos->animal</td>
                    <td>$produtos->status_produto</td>
                    <td>
						<a href='editar_produtos.php?id={$produtos->id_produto}' class='botaoalterar'>Alterar</a>
								
						&nbsp;&nbsp;";

						if($produtos->status_produto == "Ativo")
						{
							echo "<a href='alterar_status_produtos.php?id={$produtos->id_produto}&status_produto=Inativo'class='botaoinativar'>Inativar</a>";
						}
						else
						{
							echo "<a href='alterar_status_produtos.php?id={$produtos->id_produto}&status_produto=Ativo' class='botaoativar'>Ativar</a>";
						}
                        
			    echo "</td>
                </tr>";
            }

            echo "</table>
        </div class='tabelacontainer'>";
    ?>

</body>
</html>