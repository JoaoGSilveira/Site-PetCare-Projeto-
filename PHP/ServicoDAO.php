<?php

    class ServicoDAO extends Conexao{
        public function __construct(){
            parent :: __construct();
        }

        public function inserir($servico){
            $sql = "INSERT INTO servico (descricao, servico_status) VALUES(?,?)";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $servico->getDescricao());
            $stm->bindValue(2, $servico->getServico_status());
            $stm->execute();
            $this->dba = null;
        }

        public function buscar_todos(){
            $sql = "SELECT * FROM servico";
            $stm = $this->dba->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function buscar_servicos_ativos($servico)
        {
            $sql = "SELECT * FROM servico WHERE servico_status = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $servico->getServico_status());
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function alterar_status_servico($servico)
		{
			$sql = "UPDATE servico SET servico_status = ? WHERE id_servico = ?";
			$stm = $this->dba->prepare($sql);
			$stm->bindValue(1, $servico->getServico_status());
			$stm->bindValue(2, $servico->getIdServico());
			$stm->execute();
			$this->db = null;
		}

        public function alterar_descricao_servico($servico) {
            $sql = "UPDATE servico SET descricao = ? WHERE id_servico = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $servico->getDescricao());
            $stm->bindValue(2, $servico->getIdServico());
            $stm->execute();
            $this->dba = null;
        }

        public function buscar_um_servico($id) {
            $sql = "SELECT * FROM servico WHERE id_servico = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $id);
            $stm->execute();
            $resultado = $stm->fetch(PDO::FETCH_ASSOC);
    
            if ($resultado) {
                $servico = new Servico();
                $servico->setIdServico($resultado['id_servico']);
                $servico->setDescricao($resultado['descricao']);
                $servico->setServico_status($resultado['servico_status']);
                return $servico;
            } else {
                return null;
            }
        }
    }

?>