<?php

    class MarcaDAO extends Conexao{
        public function __construct(){
            parent :: __construct();
        }

        public function inserir($marca){
            $sql = "INSERT INTO marca (nome, status_marca) VALUES(?,?)";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $marca->getNome());
            $stm->bindValue(2, $marca->getStatus());
            $stm->execute();
            $this->dba = null;
        }

        public function buscar_todos(){
            $sql = "SELECT * FROM marca";
            $stm = $this->dba->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function buscar_marcas_ativas($marca)
        {
            $sql = "SELECT * FROM marca WHERE status_marca = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $marca->getStatus());
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function alterar_status_marca($marca)
		{
			$sql = "UPDATE marca SET status_marca = ? WHERE id_marca = ?";
			$stm = $this->dba->prepare($sql);
			$stm->bindValue(1, $marca->getStatus());
			$stm->bindValue(2, $marca->getIdMarca());
			$stm->execute();
			$this->db = null;
		}

        public function buscar_uma_marca($id_marca){
            $sql = "SELECT * FROM marca WHERE id_marca = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $id_marca, PDO::PARAM_INT);
            $stm->execute();
            $this->dba = null;
            return $stm->fetch(PDO::FETCH_OBJ);
        }

        public function alterar($marca)
		{
			$sql = "UPDATE marca SET nome = ? WHERE id_marca = ?";
			$stm = $this->dba->prepare($sql);
			$stm->bindValue(1, $marca->getNome());
			$stm->bindValue(2, $marca->getIdMarca());
			$stm->execute();
			$this->db = null;
		}
    }

?>