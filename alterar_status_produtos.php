<?php
	if($_GET)
	{
		require_once "PHP/Conexao.class.php";
		require_once "PHP/Pessoa.class.php";
		require_once "PHP/Produto.class.php";
		require_once "PHP/ProdutoDAO.php";
		
		$produto = new Produto($_GET["id"], "", "", 0 , 0, "", "", $_GET["status_produto"]);
		$produtoDAO = new ProdutoDAO();
		$produtoDAO->alterar_status_produto($produto);
		header("Location:listar_produtos.php");
	}
?>