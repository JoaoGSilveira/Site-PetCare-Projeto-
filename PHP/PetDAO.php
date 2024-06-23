<?php

    class PetDAO extends Conexao{
        public function __construct(){
            parent :: __construct();
        }

        public function inserir($pet){
            $sql = "INSERT INTO pet (idade, nome, raca, id_cliente, status_pet, tipo_pet) VALUES(?,?,?,?,?,?)";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $pet->getDataNasc());
            $stm->bindValue(2, $pet->getNome());
            $stm->bindValue(3, $pet->getRaca());
            $stm->bindValue(4, $pet->getPetidcli());
            $stm->bindValue(5, $pet->getPetstatus());
            $stm->bindValue(6, $pet->getTipopet());
            $stm->execute();
            $this->dba = null;
        }

        public function buscar_pet_ativos($pet)
        {
            $sql = "SELECT p.id_pet, p.nome AS nome_pet, u.nome AS nome_dono FROM pet p JOIN usuario u ON p.id_cliente = u.id_cliente WHERE p.status_pet = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $pet->getPetstatus());
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }

?>