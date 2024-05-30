<?php

class ClienteDAO extends Conexao{
    public function __construct(){
        parent :: __construct();
    }

public function inserir($cliente){
    $sql = "INSERT INTO usuario (tipo, nome, email, senha, telefone, cpf, logradouro, bairro, cidade, uf, numero) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    $stm = $this->dba->prepare($sql);
    $stm->bindValue(1, $cliente->getTipo());
    $stm->bindValue(2, $cliente->getNome());
    $stm->bindValue(3, $cliente->getEmail());
    $stm->bindValue(4, $cliente->getSenha());
    $stm->bindValue(5, $cliente->getTelefone());
    $stm->bindValue(6, $cliente->getCpf());
    $stm->bindValue(7, $cliente->getLogradouro());
    $stm->bindValue(8, $cliente->getBairro());
    $stm->bindValue(9, $cliente->getCidade());
    $stm->bindValue(10, $cliente->getUf());
    $stm->bindValue(11, $cliente->getNumero());
    $stm->execute();
    $this->dba = null;
}

public function buscar_todos(){
	$sql = "SELECT * FROM usuario";
	$stm = $this->dba->prepare($sql);
	$stm->execute();
	$this->db = null;
	return $stm->fetchAll(PDO::FETCH_OBJ);
	}

}

?>