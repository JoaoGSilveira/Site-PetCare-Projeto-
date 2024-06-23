<?php
    class AgendaDAO extends Conexao {
        public function __construct() {
            parent::__construct();
        }

        public function buscar_agendamentos() {
            $sql = "SELECT * FROM agenda";
            $stm = $this->dba->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function inserir($agenda){
            $sql = "INSERT INTO agenda (tipo_servico, horario, data_ag, id_pet, valor_servico) VALUES(?,?,?,?,?)";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $agenda->getTipo_servico());
            $stm->bindValue(2, $agenda->getHorario());
            $stm->bindValue(3, $agenda->getData_ag());
            $stm->bindValue(4, $agenda->getId_pet());
            $stm->bindValue(5, $agenda->getValorservico());
            $stm->execute();
            $this->dba = null;
        }
    }
?>
