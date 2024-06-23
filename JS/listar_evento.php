<?php

    require_once '../PHP/Conexao.class.php';
    require_once '../PHP/AgendaDAO.php';

    $agendaDAO = new AgendaDAO();
    $eventos = $agendaDAO->buscar_agendamentos();

    header('Content-Type: application/json');
    echo json_encode($eventos);

    var_dump($eventos);
    
?>
