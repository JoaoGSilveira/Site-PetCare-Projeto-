<?php

class PetDAO extends Conexao{
    public function __construct(){
        parent :: __construct();
    }

    public function inserir($pet){
        $sql = "INSERT INTO pet (idade, nome, raca, id_cliente, status_pet) VALUES(?,?,?,?,?)";
        $stm = $this->dba->prepare($sql);
        $stm->bindValue(1, $pet->getDataNasc());
        $stm->bindValue(2, $pet->getNome());
        $stm->bindValue(3, $pet->getRaca());
        $stm->bindValue(4, $pet->getPetidcli());
        $stm->bindValue(5, $pet->getPetstatus());
        $stm->execute();
        $this->dba = null;
    }
}

?>