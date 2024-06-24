<?php
	if($_GET)
	{
		require_once "PHP/Conexao.class.php";
		require_once "PHP/Pessoa.class.php";
		require_once "PHP/Servico.class.php";
		require_once "PHP/ServicoDAO.php";
		
		$servico = new Servico($_GET["id"], "", $_GET["servico_status"]);
		$servicoDAO = new ServicoDAO();
		$servicoDAO->alterar_status_servico($servico);
		header("Location:listar_servico.php");
	}
?>