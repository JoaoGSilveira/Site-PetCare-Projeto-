<?php
    require_once "PHP/Conexao.class.php";
    require_once "navbar.php";
    require_once "PHP/Agenda.class.php";
    require_once "PHP/AgendaDAO.php";
    require_once "verificar_permissao.php";

    $agendaDAO = new AgendaDAO();

    $agendamento = $agendaDAO->buscar_agendamentos();

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PetCare | Listar Agendamentos</title>
</head>
<body>
    <h1 class="titletabelaclientes">Tabela de Agendamentos</h1>
    <?php

        echo "
        <div class='tabelacontainer'>
            <table class='tabela'>
                <tr class='titletabela'>
                    <th>ID</th>
                    <th>Tipo de Serviço</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Pet</th>
                    <th>Valor do Serviço</th>
                </tr>";

            foreach ($agendamento as $agendamentos){
                echo "
                <tr>
                    <td>$agendamentos->id_agenda</td>
                    <td>$agendamentos->tipo_servico</td>
                    <td>$agendamentos->data_ag</td>
                    <td>$agendamentos->horario</td>
                    <td>$agendamentos->id_pet</td>
                    <td>$agendamentos->valor_servico</td>
                </tr>";
            }

            echo "</table>
        </div class='tabelacontainer'>";
    ?>

</body>
</html>