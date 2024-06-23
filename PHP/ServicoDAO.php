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
    }

?>