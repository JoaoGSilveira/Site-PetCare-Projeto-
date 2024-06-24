<?php
	if($_GET)
	{
		require_once "PHP/Conexao.class.php";
		require_once "PHP/Pessoa.class.php";
		require_once "PHP/cliente.class.php";
		require_once "PHP/ClienteDAO.php";
		
		$cliente = new Cliente($_GET["id"], "", "", "", "", "", "", "", "", $_GET["status_cliente"]);
		$clienteDAO = new ClienteDAO();
		$clienteDAO->alterar_status_cliente($cliente);
		header("Location:listar_usuarios.php");
	}
?>