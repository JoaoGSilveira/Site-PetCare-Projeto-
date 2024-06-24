<?php

    class CategoriaDAO extends Conexao{
        public function __construct(){
            parent :: __construct();
        }

        public function inserir($categoria){
            $sql = "INSERT INTO categoria_produto (nome_categoria, status_categoria) VALUES(?,?)";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $categoria->getDescritivo());
            $stm->bindValue(2, $categoria->getStatus());
            $stm->execute();
            $this->dba = null;
        }

        public function buscar_todos(){
            $sql = "SELECT * FROM categoria_produto";
            $stm = $this->dba->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function buscar_categorias_ativas($categoria)
        {
            $sql = "SELECT * FROM categoria_produto WHERE status_categoria = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $categoria->getStatus());
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function alterar($categoria)
		{
			$sql = "UPDATE categoria_produto SET nome_categoria = ? WHERE id_categoria = ?";
			$stm = $this->dba->prepare($sql);
			$stm->bindValue(1, $categoria->getDescritivo());
			$stm->bindValue(2, $categoria->getIdCategoria());
			$stm->execute();
			$this->db = null;
		}

        public function buscar_uma_categoria($categoria)
		{
			$sql = "SELECT * FROM categoria_produto WHERE id_categoria = ?";
			$stm = $this->dba->prepare($sql);
			$stm->bindValue(1,$categoria->getIdcategoria());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

        public function alterar_status_categoria($categoria)
		{
			$sql = "UPDATE categoria_produto SET status_categoria = ? WHERE id_categoria = ?";
			$stm = $this->dba->prepare($sql);
			$stm->bindValue(1, $categoria->getStatus());
			$stm->bindValue(2, $categoria->getIdcategoria());
			$stm->execute();
			$this->db = null;
		}
    }

?>