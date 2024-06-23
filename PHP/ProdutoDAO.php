<?php

    class ProdutoDAO extends Conexao{
        public function __construct(){
            parent :: __construct();
        }

        public function inserir($produto){
            $sql = "INSERT INTO produto (nome, imagem, estoque, preco, animal, descritivo, id_marca, id_categoria, status_produto) VALUES(?,?,?,?,?,?,?,?,?)";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $produto->getNome());
            $stm->bindValue(2, $produto->getImagem());
            $stm->bindValue(3, $produto->getEstoque());
            $stm->bindValue(4, $produto->getPreco());
            $stm->bindValue(5, $produto->getAnimal());
            $stm->bindValue(6, $produto->getDescricao());
            $stm->bindValue(7, $produto->getMarca()->getIdMarca());
            $stm->bindValue(8, $produto->getCategoria_produto()->getIdCategoria());
            $stm->bindValue(9, $produto->getStatus());
            $stm->execute();
            $this->dba = null;
        }

        public function buscar_todos(){
            $sql = "SELECT * FROM produto";
            $stm = $this->dba->prepare($sql);
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        public function buscar_produtos_ativas($produto)
        {
            $sql = "SELECT * FROM produto WHERE status_produto = ?";
            $stm = $this->dba->prepare($sql);
            $stm->bindValue(1, $produto->getStatus());
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }

?>