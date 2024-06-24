<?php
	if(isset($_GET["id"]))
	{
		require_once "PHP/Conexao.class.php";
		require_once "PHP/CategoriaDAO.php";
		require_once "PHP/categoria_produto.class.php";
		
		$categoria = new Categoria_Produto($_GET["id"]);
		
		$categoriaDAO = new CategoriaDAO();
		$categoriaDAO->excluir($categoria);
		header("location:listar_categoria.php");
	}
?>