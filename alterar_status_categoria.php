<?php
	if($_GET)
	{
		require_once "PHP/Conexao.class.php";
		require_once "PHP/Pessoa.class.php";
		require_once "PHP/Categoria_Produto.class.php";
		require_once "PHP/CategoriaDAO.php";
		
		$categoria = new Categoria_Produto($_GET["id"], "", $_GET["status_categoria"]);
		$categoriaDAO = new CategoriaDAO();
		$categoriaDAO->alterar_status_categoria($categoria);
		header("Location:listar_categoria.php");
	}
?>