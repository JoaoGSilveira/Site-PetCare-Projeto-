<?php
	if($_GET)
	{
		require_once "PHP/Conexao.class.php";
		require_once "PHP/Marca.class.php";
		require_once "PHP/MarcaDAO.php";
		
		$marca = new Marca($_GET["id"], "", $_GET["status_marca"]);
		$marcaDAO = new MarcaDAO();
		$marcaDAO->alterar_status_marca($marca);
		header("Location:listar_marca.php");
	}
?>