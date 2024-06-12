<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Categoria_Produto.class.php";
    require_once "PHP/CategoriaDAO.php";
    require_once "verificar_permissao.php";

    $categoriaDAO = new CategoriaDAO();

    $categoria = $categoriaDAO->buscar_todos();

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Listar Categorias</title>
</head>
<body>
    <h1 class="titletabelaclientes">Tabela de Categorias</h1>
    <?php

        echo "
        <div class='tabelacontainer'>
            <table class='tabela'>
                <tr class='titletabela'>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>";

            foreach ($categoria as $categorias){
                echo "
                <tr>
                    <td>$categorias->id_categoria</td>
                    <td>$categorias->nome_categoria</td>
                    <td></td>
                    <td></td>
                </tr>";
            }

            echo "</table>
        </div class='tabelacontainer'>";
    ?>

</body>
</html>