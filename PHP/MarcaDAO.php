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
}

?>