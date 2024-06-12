<?php

class CategoriaDAO extends Conexao{
    public function __construct(){
        parent :: __construct();
    }

    public function inserir($categoria){
        $sql = "INSERT INTO categoria_produto (nome_categoria) VALUES(?)";
        $stm = $this->dba->prepare($sql);
        $stm->bindValue(1, $categoria->getDescritivo());
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
}

?>