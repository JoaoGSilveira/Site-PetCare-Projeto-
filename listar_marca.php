<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Marca.class.php";
    require_once "PHP/MarcaDAO.php";
    require_once "verificar_permissao.php";

    $marcaDAO = new MarcaDAO();

    $marca = $marcaDAO->buscar_todos();

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Listar Marcas</title>
</head>
<body>
    <h1 class="titletabelaclientes">Tabela de Marcas</h1>
    <?php

        echo "
        <div class='tabelacontainer'>
            <table class='tabela'>
                <tr class='titletabela'>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>";

            foreach ($marca as $marcas){
                echo "
                <tr>
                    <td>$marcas->id_marca</td>
                    <td>$marcas->nome</td>
                    <td>$marcas->status_marca</td>
                    <td>
						<a href='editar_marca.php?id={$marcas->id_marca}' class='botaoalterar'>Alterar</a>
								
						&nbsp;&nbsp;";

						if($marcas->status_marca == "Ativo")
						{
							echo "<a href='alterar_status_marca.php?id={$marcas->id_marca}&status_marca=Inativo'class='botaoinativar'>Inativar</a>";
						}
						else
						{
							echo "<a href='alterar_status_marca.php?id={$marcas->id_marca}&status_marca=Ativo' class='botaoativar'>Ativar</a>";
						}
                        
			    echo "</td>
                </tr>";
            }

            echo "</table>
        </div class='tabelacontainer'>";
    ?>

</body>
</html>